<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<?php
  include 'data.php';
  include 'functions.php';
  $user = $_GET['user'] ?? '';
  $index = -1;
  $userIndex = -1;
  if ($user != '') {
    if ($user == 'Saif Alnuaimi Alnuaimi') {
      $index = 0;
      $userIndex = 0;
    } elseif ($user == 'Nazrul Islam') {
      $index = 14;
      $userIndex = 14;
    } elseif ($user == 'Riyadh Khan') {
      $index = 28;
      $userIndex = 28;
    } elseif ($user == 'Niloy Islam') {
      $index = 42;
      $userIndex = 42;
    }
  }
?>

<body>
  <link rel="stylesheet" href="assets/css/detail.css" />
  <title><?php echo "Saif Alnuaimi Alnuaimi"; ?></title>
  <div class="container text-center mb-5">
    <h1><?php echo "This is ASE 230 - Saif Alnuaimi Alnuaimi"; ?></h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <?php echo "<img class='w-100' src='$userData[$index]' alt=''>"; ?>
        </div>
        <?php $index += 5; ?>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo "$user"; ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream profession:"; ?></span>
              <label class="media-body"><?php echo "$userData[$index]";
                                        $index += 1; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo "Dream company:"; ?></span>
              <label class="media-body"><?php echo "$userData[$index]";
                                        $index += 1; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body"><?php echo "$userData[$index]";
                                        $index += 1; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Age: </span>
              <label class="media-body"><?php echo getAge($userData[($userIndex+4)])." Years."; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Age (Y-M-D): </span>
              <label class="media-body"><?php echo getDetailedAge($userData[($userIndex+4)]); ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?php echo "Short intro"; ?></h5>
        <p>
          <?php echo "$userData[$index]";
          $index += 1; ?>
        </p>
        <div class="my-2 bg-light p-2">
          <p class="font-italic mb-0">
            <?php echo "$userData[$index]";
            $index += 1; ?>
          <p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal"><?php echo "Top skills"; ?></h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style=<?php echo "width:$userData[$index]%"; ?> aria-valuenow=<?php echo "$userData[$index]"; ?> aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Finance"; ?></div>
              <span class="progress-bar-number"><?php echo "$userData[$index]%";
                                                $index += 1; ?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style=<?php echo "width:$userData[$index]%"; ?> aria-valuenow=<?php echo "$userData[$index]"; ?> aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Information Technologies"; ?></div>
              <span class="progress-bar-number"><?php echo "$userData[$index]%";
                                                $index += 1; ?></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style=<?php echo "width:$userData[$index]%"; ?> aria-valuenow=<?php echo "$userData[$index]"; ?> aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo "Education"; ?></div>
              <span class="progress-bar-number"><?php echo "$userData[$index]%";
                                                $index += 1; ?></span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal"><?php echo "Fun Facts"; ?></h5>
        <p><?php echo "$userData[$index]";
            $index += 1; ?></p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>