    <footer class="bg-dark">
        <div class="container">
            <div class="py-3 text-center text-white"><span>Copyright &#169; Madd - 2023</span></div>
        </div>
    </footer>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#example').DataTable();
        });
        $('#example').DataTable({
        lengthChange: false,//untuk matikan ganti jumlah row per page
        info: false,
        language: {
        search: '',
        searchPlaceholder: 'Cari data...'
        }
        });
    </script>

</body>

</html>