<!doctype html>
<html lang="en">
<?php
include "include_header.php";
include "include_navbar.php";
include "../Controller/tableprocess.php";
?>
<body>

  <!-- this is the API forwarding the table end date -->
  <div class="wrapthisclub">

    <article class="home-info">
      <?php
      $uri = 'http://api.football-data.org/v2/competitions/PL/matches/?matchday=22';
      $reqPrefs['http']['method'] = 'GET';
      $reqPrefs['http']['header'] = 'X-Auth-Token: d500c07361b1414e8e5904466828ad6e';
      $stream_context = stream_context_create($reqPrefs);
      $response = file_get_contents($uri, false, $stream_context);
      $matches = json_decode($response);
      ?>
    </article>

    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">League</th>
          <th scope="col">Start Date</th>
          <th scope="col">Current Matchday</th>
          <th scope="col">Season End Date</th>
        </tr>
      </thead>
      <tbody>
        <p>This is a test, Ive called a API to fill in data</p>
        <p> Which works</p>
        <tr>
          <td><?php  echo $matches->competition->name; ?></td>
          <td><?php  echo $matches->matches[0]->season->endDate; ?></td>
          <td><?php  echo $matches->matches[0]->season->currentMatchday;?></td>
          <td><?php  echo $matches->matches[0]->season->startDate; ?></td>
        </tr>
      </tbody>
    </table>

    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Home Team</th>
          <th scope="col">Away Team</th>
          <th scope="col"></th>
          <th scope="col">Season End Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php  echo $matches->matches[0]->homeTeam->name; ?></td>
          <td><?php  echo $matches->matches[0]->awayTeam->name; ?></td>
          <td><?php  if(!empty($matches->matches[0]->referees[0])){echo $matches->matches[0]->referees;}?></td>
          <td><?php  echo $matches->matches[0]->score->duration; ?></td>
        </tr>
      </tbody>
    </table>

</div>



</body>
<footer>
<?php
include "include_footer.php";
?>
</footer>
</html>
