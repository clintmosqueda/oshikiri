<?php

// Contact Form 7のショートコード生成をカスタマイズ
add_filter('wpcf7_form_tag', 'custom_dynamic_select', 10, 2);

function custom_dynamic_select($tag, $unused) {
    // documentという名前のセレクトフィールドの場合のみ処理
    if ($tag['name'] !== 'download_document' && $tag['name'] !== 'job_opening') {
        return $tag;
    }

    // カタログ投稿を取得
    $catalog = query_custom_post(-1, CATALOG_POST_TYPE);
    $job_opening = get_field('job', 'option');
    $options = array();

    if($tag['name'] == 'download_document') {
      if ($catalog->have_posts()) {
        while ($catalog->have_posts()) {
            $catalog->the_post();
            // 選択肢として投稿タイトルを追加
            $options[] = array(
                'value' => get_the_title(),
                'label' => get_the_title()
            );
        }
      }
      wp_reset_postdata();
    };

    if($tag['name'] == 'job_opening') {
      foreach( $job_opening as $job ) {
        $options[] = array(
          'value' => $job["position"],
          'label' => $job["position"]
      );
      }
    };


    // タグの options を更新
    $tag['values'] = array_column($options, 'value');
    $tag['labels'] = array_column($options, 'label');

    return $tag;
}

// Contact Form 7の自動挿入p,brタグを無効化
function wpcf_autop_delete() {
  return false;
} 
add_filter('wpcf7_autop_or_not', 'wpcf_autop_delete');

function load_contact_form_styles() {
    // Contact Form 7が存在するかチェック
    if (class_exists('WPCF7')) {
        // 現在のページでContact Form 7が使用されているかチェック
        global $post;
        if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'contact-form-7')) {
            ?>
            <style>
                .contact-button{
                    max-width: 280px;
                }
                .custom-wpcf7cp-confirm.wpcf7cp-form-hide + #wpcf7cpcnf {
                    display: block;
                }

                /* 確認画面全体のコンテナ */
                #wpcf7cpcnf {
                    max-width: 800px;
                    margin: 2rem auto;
                    font-family: sans-serif;
                    display: none;
                }

                /* テーブルの基本スタイル */
                #wpcf7cpcnf table {
                    width: 100%;
                    border-collapse: separate;
                    border-spacing: 0;
                    background: #fff;
                    border-radius: 8px;
                    overflow: hidden;
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                }

                /* セルの共通スタイル */
                #wpcf7cpcnf th,
                #wpcf7cpcnf td {
                    padding: 1rem 1.5rem;
                    border-bottom: 1px solid #edf2f7;
                }

                .custom-wpcf7cp-confirm ~ #wpcf7cpcnf table tr:last-of-type {
                    display: none;
                }

                /* 見出しセル */
                #wpcf7cpcnf th {
                    width: 30%;
                    background: #f8fafc;
                    font-weight: 600;
                    text-align: left;
                    vertical-align: top;
                    color: #4a5568;
                }

                /* データセル */
                #wpcf7cpcnf td {
                    background: #fff;
                    color: #2d3748;
                }

                /* セル内のpタグのマージンを削除 */
                #wpcf7cpcnf th p,
                #wpcf7cpcnf td p {
                    margin: 0;
                    padding: 0;
                    line-height: 1.6;
                }

                /* 最後の行のボーダーを削除 */
                #wpcf7cpcnf tr:last-child th,
                #wpcf7cpcnf tr:last-child td {
                    border-bottom: none;
                }

                /* ボタンコンテナ */
                .wpcf7cp-btns {
                    display: flex;
                    gap: 1rem;
                    justify-content: center;
                    margin-top: 2rem;
                }

                /* ボタン共通スタイル */
                .wpcf7cp-btns button {
                    padding: 0.75rem 2rem;
                    border-radius: 6px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: transform 0.2s, box-shadow 0.2s;
                    border: none;
                }

                /* 修正ボタン */
                .wpcf7cp-cfm-edit-btn {
                    background: #f7fafc;
                    color: #4a5568;
                    border: 1px solid #e2e8f0;
                }

                .wpcf7cp-cfm-edit-btn:hover {
                    background: #edf2f7;
                    transform: translateY(-1px);
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
                }

                /* 送信ボタン */
                .wpcf7cp-cfm-submit-btn {
                    background: #CC0000;
                    color: white;
                }

                .wpcf7cp-cfm-submit-btn:hover {
                    background: #8f1c1c;
                    transform: translateY(-1px);
                    box-shadow: 0 2px 4px rgba(66, 153, 225, 0.3);
                }

                /* レスポンシブ対応 */
                @media screen and (max-width: 768px) {
                    #wpcf7cpcnf table {
                        border-radius: 6px;
                    }

                    #wpcf7cpcnf th,
                    #wpcf7cpcnf td {
                        padding: 0.875rem 1rem;
                    }

                    #wpcf7cpcnf th {
                        width: 35%;
                    }
                }

                @media screen and (max-width: 480px) {
                    #wpcf7cpcnf th,
                    #wpcf7cpcnf td {
                        display: block;
                        width: 100%;
                    }

                    #wpcf7cpcnf th {
                        border-bottom: none;
                        padding-bottom: 0.5rem;
                    }

                    #wpcf7cpcnf td {
                        padding-top: 0.5rem;
                    }

                    .wpcf7cp-btns {
                        flex-direction: column;
                    }

                    .wpcf7cp-btns button {
                        width: 100%;
                    }
                }
            </style>
            <?php
        }
    }
}
add_action('wp_head', 'load_contact_form_styles');