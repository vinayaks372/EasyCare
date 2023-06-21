    <div class="container footer">
      <hr>
      <footer>
        <p align="right">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php">Staff Login</a>
                  </li>';
                }
        ?>
        </p>
        <p align="right">
        <a href="https://www.youtube.com/channel/UCvSG7AWgMpGY9ZxIsBHJWUg">Coep Hospital Wala</a> - <?php echo date('Y'); ?>
        </nav>
		</p>
      </footer>
    </div>
  </body>
</html>
