<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <span id="current-year"></span> Tous droits réservés  <strong><span>M. Bonnet Guilhèm</span></strong>
      </div>
    </div>
</footer>

<script>
  const Newdate = new Date();
  const currentYear = Newdate.getFullYear();
  document.getElementById('current-year').textContent = currentYear;
</script>

  <!-- End  Footer -->