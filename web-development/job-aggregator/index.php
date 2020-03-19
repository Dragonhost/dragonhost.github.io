<? ob_start(); ?>
<?php

include "includes/includes.php";

?>

<?php if(isset($_REQUEST['user'])){ $username = $_REQUEST['user']; ?>

  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button> -->

  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="welcome_modal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        Hey <?php echo $username;?>!
      </div>
    </div>
  </div>

<?php } ?>

  <script type="text/JavaScript">
    window.onload = function(){
      var url = window.location.href;
      var query = url.split("?");
      var user = query[1].split("=");
      if(user[0] == 'user'){
        var username = user[1];
      }
      var username = username.split("#");

      // Convert first letter of each word to Capital
      function titleCase(str) {
        var splitStr = str.toLowerCase().split(' ');
        for (var i = 0; i < splitStr.length; i++) {
            // You do not need to check if i is larger than splitStr length, as your for does that for you
            // Assign it back to the array
            splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
        }
        // Directly return the joined string
        return splitStr.join(' '); 
      }

      var username_camelcase = titleCase(username[0]);
      var  msg = "<div class='mt-2 mb-4'><h5 class='d-inline'>Hey </h5><h3 class='d-inline text-info'>"+username_camelcase+"!</h3><h5 class='d-inline'> Welcome.</h5></div>";
      document.getElementById('welcome').innerHTML = msg;
    };
  </script>

<div class="container text-center text-white" id="welcome">
</div>


<div id="sequence" class="seq" style="height: 100%;">

<div class="seq-nav">

  <ul role="navigation" aria-label="Pagination" class="seq-pagination">
    <li><a href="#step1" rel="step1" title="Go to slide 1"><span class="numeral">1</span><span class="seq-tooltip">Job Aggregator</span></a></li><!--
    --><li><a href="#step2" rel="step2" title="Go to slide 2"><span class="numeral">2</span><span class="seq-tooltip">Categorise by Field</span></a></li><!--
    --><li><a href="#step3" rel="step3" title="Go to slide 3"><span class="numeral">3</span><span class="seq-tooltip">Categorise by Locationn</span></a></li>
  </ul>

  <button class="seq-next seq-swipe" type="button" aria-label="Next">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21.5" viewBox="30.4 23.7 20 21.5" enable-background="new 30.4 23.7 20 21.5" role="img" aria-labelledby="title-swipe-icon"><title id="title-swipe-icon">Swipe Icon</title><path d="M33 23.7c-.1 0-.3.1-.4.2l-2.1 2.1c-.2.2-.2.6 0 .9l2.1 2.1c.2.2.6.2.9 0s.2-.6 0-.9l-1.1-1.1h5.2c.3 0 .6-.3.6-.6s-.3-.6-.6-.6h-5.2l1.1-1.1c.2-.2.3-.6 0-.9-.1-.1-.2-.1-.5-.1zm14.6 0c-.3 0-.6.3-.6.7 0 .1.1.3.2.4l1.1 1.1h-5.2c-.3 0-.6.3-.6.6s.2.5.6.5h5.2l-1.1 1.1c-.2.2-.2.6 0 .9s.6.2.9 0l2.1-2.1c.2-.2.2-.6 0-.9l-2.1-2.1c-.2-.2-.3-.2-.5-.2zm-7.3 1.3c-.8 0-1.4.6-1.4 1.4v8.8c-.5-.6-1.1-1.3-1.6-1.6-.3-.2-.7-.4-1.1-.4-.7 0-1.2.5-1.3 1.2-.1.8.4 1.6.8 2.2l1.5 2.4 1.2 1.9c.6 1 .7 1.8.7 2.9v1.2c0 .1.1.2.2.2h8.2c.1 0 .2-.1.2-.2.1-.8.2-1.6.4-2.4.7-2 1.3-3.9 1.3-6.4v-4c0-.8-.6-1.4-1.4-1.4-.4 0-.7.1-1.2.6 0-.8-.6-1.4-1.4-1.4-.5 0-.9.2-1.2.6-.1-.7-.7-1.2-1.4-1.2-.5 0-.9.2-1.2.6v-3.5c.2-.8-.5-1.5-1.3-1.5z"/></svg>
  </button>
</div>

<button class="seq-next-button seq-next" type="button" aria-label="Next">
  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="16.1 -0.7 60 60" enable-background="new 16.1 -0.7 60 60" role="img" aria-labelledby="title-down-arrow"><title id="title-down-arrow">Down/Next Arrow</title><path d="M46.407 1.399l27.435 27.435-28.213 28.213-27.435-27.435z"/><path fill="#fff" d="M46.1 59.3l-30-30 30-30 30 30-30 30zm-22.9-30l22.9 22.9 22.9-22.9-22.9-22.9-22.9 22.9zM39.278 23.872l11.031 11.031-4.172 4.172-11.031-11.031zM57.172 28.079l-11.031 11.031-4.172-4.172 11.031-11.031z"/></svg>
</button>

<div class="seq-screen">
  <ul class="seq-canvas">
    <li class="step1 seq-in">
      <div data-seq class="seq-feature seq-half">
        <div style="background-image: url(images/office.jpg)">
          <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
          <!-- <img src="https://source.unsplash.com/random" alt="A close-up of green fern leaves" /> -->
        </div>
      </div>
      <div data-seq class="seq-content seq-half seq-valign">
        <div>
          <h2>Job Aggregator</h2>
          <h3>The one stop solution for Job searching</h3>
          <a data-easing="easeInOutQuad" class="seq-button" href="#available_options">Find Out More</a>
        </div>
      </div>
    </li>
    <li class="step2">
      <div data-seq class="seq-feature seq-half seq-half-right">
        <div style="background-image: url(images/fields.jpg)">
          <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
          <!-- <img src="https://source.unsplash.com/random" alt="Focused on a single autumn leave hanging from a thin branch. More leaves appear out of focus in the background" /> -->
        </div>
      </div>
      <div data-seq class="seq-content seq-half seq-half-left seq-valign">
        <div>
          <h2>Categorise by Field</h2>
          <h3>Search for the best job options in your field of Expertise</h3>
          <a class="seq-button" href="jobs.php">Find Out More</a>
        </div>
      </div>
    </li>
    <li class="step3">
      <div data-seq class="seq-feature seq-half seq-half-right">
        <div style="background-image: url(images/location.jpg)">
          <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
          <!-- <img src="https://source.unsplash.com/random" alt="A close-up of several purple flowers with yellow centers. A few rain drops sit on the pettels" /> -->
        </div>
      </div>
      <div data-seq class="seq-content seq-half seq-half-left seq-valign">
        <div>
          <h2>Categorise by Location</h2>
          <h3>Search for the best job based on your Location</h3>
          <a class="seq-button" href="jobs.php">Find Out More</a>
        </div>
      </div>
    </li>
  </ul>
</div>

</div>   

<div data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
  <div class="container p-3 text-center" id="available_options">
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <div class="container bg-white rounded p-5">
          <h3 class="text-center mb-4 text-info">
            <i class="fas fa-layer-group"></i> Available Categories
          </h3>
          <?php foreach($retrieve_categories as $r_c){ ?>
          <ul class="list-group">
            <li class="list-group-item text-capitalize mb-2">
              <?php echo $r_c['category'] ?>
            </li>
          </ul>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="container bg-white rounded p-5">
          <h3 class="text-center mb-4 text-info">
            <i class="fas fa-map-marker-alt"></i> Available Locations
          </h3>
          <?php foreach($retrieve_locations as $r_l){ ?>
          <ul class="list-group">
            <li class="list-group-item mb-2">
              <?php echo $r_l['location'] ?>
            </li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include "html/footer.php";

?>
<? ob_flush(); ?>