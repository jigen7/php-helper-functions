<html>

<body>
<?php

$brgyList = array("Dulong Bayan", "Morning Star", "Evening Star");

$purok1 = array('purok_name' => 'purok 1', 'brgy_name' => 'Dulong Bayan');
$purok2 = array('purok_name' => 'purok 2', 'brgy_name' => 'Dulong Bayan');
$purok3 = array('purok_name' => 'purok 3', 'brgy_name' => 'Morning Star');
$purokList = array($purok1, $purok2, $purok3);

?>

<form>

        <select id="brgy" name="brgy">
          <option value="">--</option>
          
          <?php
          foreach ($brgyList as $brgy){
          	echo "<option value=$brgy>$brgy</option>";
          }
          ?>

        </select>

        <select id="purok" name="purok">
          <option value="">--</option>
          
          <?php
          foreach ($purokList as $purok){
          	echo "<option value=$purok[purok_name] data-chained=$purok[brgy_name]>$purok[purok_name]</option>";
          }
          ?>

        </select>

</form>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript" charset="utf-8">

	  $(function() {

		$("#purok").chained("#brgy");

	    });


   </script>

</body>
</html>