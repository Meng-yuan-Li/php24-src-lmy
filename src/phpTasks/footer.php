</div>
      <footer class="row mt-">
        <div class="col-sm-4">&copy;dreami</div>
        <div class="col-sm-4">Web develoment</div>
        <div class="col-sm-4">HAMK</div> <br>
    <?php
    $filename = basename(__FILE__);
    $lastModifiedTime = filemtime($filename);
    echo "Last Modified Time of $filename: " . date("F d, Y H:i:s", $lastModifiedTime);
    ?>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous">
    </script>
  </body>
</html>