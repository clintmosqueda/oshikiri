<?php
  $histories = [
    array(
      'year' => '1949年',
      'text' => '押切龍雄が神奈川県横浜市鶴見にて、製パン用の小型低速 横型ミキサを開発、販売をはじめる。',
    ),
    array(
      'year' => '1951年',
      'text' => '東京 大森で法人化。',
    ),
    array(
      'year' => '1955年',
      'text' => '学校給食や食生活の洋風化が進み、新製品の竪型ミキサ、生地分割機などを開発。',
    ),
    array(
      'year' => '1964年',
      'text' => '輸出開始。台湾にプラント納入第1号。',
    ),
    array(
      'year' => '1967年',
      'text' => '神奈川県藤沢市に用地取得し、湘南工場建設。',
    ),
    array(
      'year' => '1972年',
      'text' => '防カビ殺菌マイクロ波応用装置「マイクロン」開発。',
    ),
    array(
      'year' => '1976年',
      'text' => 'グループ会社第1号の(株)ホープ設立。',
    ),
    array(
      'year' => '1977年',
      'text' => '湘南工場にマイクロウェーブ研究室を設置。米国ジェミニ社と販売提携。',
    ),
    array(
      'year' => '1978年',
      'text' => '湘南工場 生産管理システムをオンライン化。',
    ),
    array(
      'year' => '1982年',
      'text' => '押切龍雄社長(当時)黄綬褒章を受章。',
    ),
    array(
      'year' => '1983年',
      'text' => 'FA工場をめざした山形工場完成。',
    ),
    array(
      'year' => '1985年',
      'text' => '輸入機の販売増大。英国サーン社、デンマーク ドールマン社、米国AMF社製品の国産化開始。',
    ),
    array(
      'year' => '1986年',
      'text' => '会長に押切龍雄、新社長に押切隆就任。',
    ),
    array(
      'year' => '1987年',
      'text' => 'オーブンメーカの(株)ハイトがグループ企業に参加。',
    ),
    array(
      'year' => '1987年',
      'text' => 'オシキリコーポレーション オブ アメリカ(米国フィラデルフィア市)設立。',
    ),
    array(
      'year' => '1988年',
      'text' => '米国PLE社と技術提携。',
    ),
    array(
      'year' => '1989年',
      'text' => '米国モーリン社と販売・技術提携。',
    ),
    array(
      'year' => '1990年',
      'text' => 'ドイツ・ライメルト社と販売・技術提携。',
    ),
    array(
      'year' => '1994年',
      'text' => '米国キャンベルテクノロジ社、ベーキングテクノロジシステムズ社と技術提携。',
    ),
    array(
      'year' => '1995年',
      'text' => '(株)オシキリエンジニアリング設立。',
    ),
    array(
      'year' => '2004年',
      'text' => '本社を東京都大森から神奈川県藤沢市に移転。',
    ),
    array(
      'year' => '2007年',
      'text' => '関連会社の(株)ハイトを吸収合併。',
    ),
    array(
      'year' => '2010年',
      'text' => '関連会社の(株)ホープを吸収合併。',
    ),
    array(
      'year' => '2016年	',
      'text' => '会長に押切隆、新社長に押切怜央奈就任。',
    ),
    array(
      'year' => '2021年	',
      'text' => '新社長に押切丈二就任。',
    ),
    array(
      'year' => '2022年',
      'text' => '富士物産株式会社を子会社化。',
    ),
    array(
      'year' => '2024年',
      'text' => '関連会社の㈱オシキリ北日本と㈱オシキリエンジニアリングを吸収合併。',
    ),
  ]
?>

<?php if(!empty($histories)) {?>
  <?php foreach($histories as $history) { ?>
    <dl class="company-history-list">
      <dt class="company-history-term"><?php echo $history["year"]?></dt>
      <dd class="company-history-description">
        <p class="company-history-par"><?php echo $history["text"]?></p>
      </dd>
    </dl>
  <?php } ?>
<?php } ?>