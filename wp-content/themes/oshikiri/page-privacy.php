<?php
/*
* Template name: Privacy
*/
get_header(); ?>
<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => 'プライバシーポリシー',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => 'プライバシーポリシー',
  'text_en' => 'Privacy.',
  'circle_count' => 30,
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="privacy">
  <h2>個人情報保護方針（プライバシーポリシー）</h2>
  <p>当社は、今日の高度情報通信社会において個人情報が重要な資産であることを理解し、個人情報を正しく扱うことが当社の重要な責務であると認識し、以下の方針に基づき個人情報の保護に努めることを宣言します。</p>
  <dl>
    <dt>1. 個人情報保護に関する法令や規律の遵守</dt>
    <dd>当社は、個人情報の保護に関する法令及びその他の規範を 遵守し、個人情報を適正に取り扱います。</dd>
  </dl>
  <dl>
    <dt>2. 個人情報の取得</dt>
    <dd>当社が個人情報を取得する際には、利用目的を明確化するよう努力し、適法かつ公正な手段によって、個人情報を取得します。</dd>
  </dl>
  <dl>
    <dt>3. 個人情報の利用目的</dt>
    <dd>当社が取得した個人情報は、弊社製品、サービス等のご紹介や各種情報提供、ならびに営業活動やマーケティング活動のために利用させていただくことがあります。</dd>
  </dl>
  <dl>
    <dt>4. 個人情報の利用</dt>
    <dd>当社が取得した個人情報は、取得の際に示した利用目的もしくは、それと合理的な関連性のある範囲内で、業務の遂行上必要な限りにおいて利用します。また、個人情報を第三者との間で共同利用し、または、個人情報の取扱いを第三者に委託する場合には、共同利用の相手方および第三者について個人情報の適正な利用を実現するための監督を行ないます。</dd>
  </dl>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();