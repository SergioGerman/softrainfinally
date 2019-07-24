</div>
</section>
<footer class="footer">

  <div class="content has-text-centered">
    <p>
      <strong>Development</strong> by <a href="#">Sergio G. Calle Luna</a>. &copy; 2019
    </p>
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>
<script type="text/javascript">
  (function() {
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#' + burger.dataset.target);

    burger.addEventListener('click', function() {
      burger.classList.toggle('is-active');
      nav.classList.toggle('is-active');
    });
  })();
</script>
</html>
