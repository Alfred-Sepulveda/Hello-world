<?php

// Read the JSON file
$json_file = file_get_contents('my_data.json');

// Decode the JSON file
$json_data = json_decode($json_file,true);

?>

<!-- Name --!>
<h1>
    <?php echo $json_data['first-name']; ?>
    <span class="text-primary"><?php echo $json_data['last-name']; ?></span>
</h1>
<div class="subheading mb-3">
 <?php echo $json_data['address']; ?> · <?php echo $json_data['phone']; ?> · <a href="<?php echo $json_data['email']; ?>"><?php echo $json_data['email']; ?></a>
</div>
<p><?php echo $json_data['introduction']; ?></p>
<?php foreach($json_data['education'] AS $education) { ?>
  <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
      <h3 class="mb-0"><?php echo $education['title']; ?></h3>
      <div class="subheading mb-3"><?php echo $education['certificate']; ?></div>
      <p><?php echo $education['description']; ?></p>
    </div>
    <div class="flex-shrink-0">
      <span class="text-primary"><?php echo $education['period']; ?>
      </span>
    </div>
  </div>
<?php  } ?>
<?php foreach($json_data['experience'] AS $experience) { ?>
  <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
    <div class="flex-grow-1">
      <h4 class="mb-0"><?php echo $experience['title']; ?></h4>
      <div class="subheading mb-3"><?php echo $experience['employer']; ?></div>
      <p><?php echo $experience['description']; ?></p>
    </div>
    <div class="flex-shrink-0">
      <span class="text-primary"><?php echo $experience['period']; ?></span>
    </div>
  </div>
<?php  } ?>