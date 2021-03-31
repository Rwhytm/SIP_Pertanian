<footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p class="text-center">
        &copy; <span id="copy-year"></span> Copyright 
        <a
          class="text-primary"
          href="http://www.facebook.com"
          target="_blank"
          >Fakultas Pertanian</a
        >.
      </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
  </footer>