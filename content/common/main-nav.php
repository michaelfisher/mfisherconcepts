<div class="masthead clearfix">
    <div class="inner">
      <nav>
        <ul class="nav masthead-nav">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="contact" data-toggle="modal" data-target="#contact-modal">Contact</a></li>
        </ul>
      </nav>
    </div>
</div>

<script>
    $(".nav li").on("click", function() {
      $(".nav li").removeClass("active");
      $(this).addClass("active");
    });
</script>