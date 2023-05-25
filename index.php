<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <title> Assignment6php </title>
        <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
                <header class="mdl-layout__header">
                  <div class="mdl-layout__index.phpheader-row">
                    <span class="mdl-layout-title">Iterations of Pi</span>
                  </div>
                </header>
              <main class="mdl-layout__content" style="margin-left:75px;">
              <form action="" method="GET" class="mdl-grid" autocomplete="off">
    <div class="mdl-cell mdl-cell--12-col">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="iterations" name="iterations" pattern="[0-9]+" title="Invalid input">
            <label class="mdl-textfield__label" for="iterations">Iterations</label>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--12-col">
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-cell--12-col">
            Calculate
        </button>
    </div>
</form>

<?php
// Pi calculation function
function calculate_pi($iterations) {
    $pi = 0;
    $sign = 1;

    for ($i = 1; $i <= $iterations * 2; $i += 2) {
        $pi += $sign * (4/$i);
        $sign *= -1;
    }

    return $pi;
}

if(isset($_GET['iterations']) && $_GET['iterations'] >= 0){
    $iterations = intval($_GET['iterations']);
    $pi_value = calculate_pi($iterations);
    echo "<div class='results'>";
    echo "Iterations: $iterations <br>";
    echo "Estimated value of Pi: $pi_value <br>";
    echo "</div>";
}
elseif(isset($_GET['iterations']) && $_GET['iterations'] < 0){
    echo "<div class='results'>Please enter a non-negative integer only.</div>";
}
?>


      </main>

        </body>
    </head>
</html>
