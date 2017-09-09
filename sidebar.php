<div class="sidebar">
  <aside>
    <ul>
      <?php dynamic_sidebar(); ?>
    </ul>
  </aside>
  <style>
  .kabu{
    font-size: 0.9rem;
  }
  .kabu h3{
    margin-bottom: 0.25rem;
    font-weight: normal;
  }
  .kabu table{
    margin-bottom: 1rem;
  }
  .kabu table th,
  .kabu table td{
    padding-right: 1rem;
    text-align: left;
    font-weight: normal;
    font-size: 0.8rem;
  }
  .kabu p{
    margin: 0;
  }
  </style>
  <aside class="kabu">
    <?php
      // $file = fopen("./sbi.csv", "r");
      $file = file(get_template_directory() . '/sbi.csv');
      $date       = rtrim($file[0], "\n");      // 日付 
      $total      = explode(',', $file[1])[1];  // 総額
      $rate_year  = explode(',', $file[2])[1];  // 年初来
      $rate_month = explode(',', $file[3])[1];  // 月初来

    $html = <<<TABLE_HEADER
    <h3>保有銘柄($date)@SBI</h3>
    <table>
      <tr>
        <th>順位</th>
        <th>銘柄</th>
        <th>比率(%)</th>
      </tr>
TABLE_HEADER;
      echo $html;
      for($i = 4; $i < count($file); $i++){
        $rank = explode(',', $file[$i])[0];
        $name = explode(',', $file[$i])[1];
        $rate = explode(',', $file[$i])[2];
        // echo '<tr><td>' . ($i - 3) . '</td><td>' . $name . '</td><td>' . $rate . '</td></tr>';
        echo '<tr><td>' . $rank . '</td><td>' . $name . '</td><td>' . $rate . '</td></tr>';
      }
      echo '</table>';
      echo '<table>';
      echo '<tr><td>総額</td><td>' . number_format($total) . '円</td></tr>';
      echo '<tr><td>年初来</td><td>' . $rate_year . '%</td></tr>';
      echo '<tr><td>月初来</td><td>' . $rate_month . '%</td></tr>';
      echo '</table>'; 
    ?>
  </aside>
</div><!-- //#sidebar -->
