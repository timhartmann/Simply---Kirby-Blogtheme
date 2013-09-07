    <footer class="l-row l-footer" role="contentinfo">
      <?php echo kirbytext($site->copyright()) ?>
      <p class="l-footer__impressum"><?php echo $site->author() ?>  ⁄  <?php echo $site->address() ?>  /  <?php echo $site->zip() ?></p>
    </footer>
  </div>

  <?php echo js('assets/build/javascript/application.min.js') ?>
</body>
</html>