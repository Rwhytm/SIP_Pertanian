<footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p class="text-left">
        &copy; <span id="copy-year"></span> Copyright 
        <a
          class="text-primary"
          href="http://fp.unib.ac.id/"
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