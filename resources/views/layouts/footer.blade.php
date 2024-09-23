<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
      document.write(new Date().getFullYear())
      </script>
      , made with ❤️ by <a href="javascript:void();" class="footer-link fw-bolder">Business Support Team</a>
    </div>
    <div>
      <a href="#" class="footer-link me-4">DB Connection: <strong class="badge bg-secondary"> {{ env('DB_CONNECTION') }}</strong></a>
      
      
      <a href="#" class="footer-link d-none d-sm-inline-block">Host: <strong class="badge bg-secondary">{{ env('DB_HOST') }}</strong></a>
      
    </div>
  </div>
</footer>