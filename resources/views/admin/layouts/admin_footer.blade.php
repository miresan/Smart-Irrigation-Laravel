<footer class="footer mt-auto">
  <div class="copyright bg-white">
    <p>
      &copy; <span id="copy-year">
      </span> 
      Copyright
      
      <?php
      $globalsetting = App\Models\Globalsetting::first();
      ?> - {{ $globalsetting->site_name }}
      {{-- <a
        class="text-primary"
        href="http://www.iamabdus.com/"
        target="_blank"
        >Abdus</a
      >. --}}
    </p>
  </div>
  <script>
      var d = new Date();
      var year = d.getFullYear();
      document.getElementById("copy-year").innerHTML = year;
  </script>
      </footer>