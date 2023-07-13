<script>
    var hostUrl = "/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="/plugins/global/plugins.bundle.js"></script>
<script src="/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="/js/widgets.bundle.js"></script>
<script src="/js/custom/widgets.js"></script>
<script src="/js/custom/apps/chat/chat.js"></script>
<script src="/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="/js/custom/utilities/modals/create-app.js"></script>
<script src="/js/custom/utilities/modals/create-account.js"></script>
<script src="/js/custom/utilities/modals/create-project/type.js"></script>
<script src="/js/custom/utilities/modals/create-project/budget.js"></script>
<script src="/js/custom/utilities/modals/create-project/settings.js"></script>
<script src="/js/custom/utilities/modals/create-project/team.js"></script>
<script src="/js/custom/utilities/modals/create-project/targets.js"></script>
<script src="/js/custom/utilities/modals/create-project/files.js"></script>
<script src="/js/custom/utilities/modals/create-project/complete.js"></script>
<script src="/js/custom/utilities/modals/create-project/main.js"></script>
<script src="/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->

<!--begin::datatables-->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Begin::Data Table Master Pelajaran -->
<script>
    $(document).ready(function() {
        $('#datamatapelajaran').DataTable();
    });
</script>
<!-- End::Data Table Master Pelajaran -->

<!-- Begin::Data Table Master Kepala Sekolah dan Guru -->
<script>
    $(document).ready(function() {
        $('#dataanggota').DataTable();
    });
</script>
<!-- End::Data Table Master Kepala Sekolah dan Guru -->

<!-- Begin::Data Table Master Siswa -->
<script>
    $(document).ready(function() {
        $('#datasiswa').DataTable();
    });
</script>
<!-- End::Data Table Master Siswa -->

<!-- Begin::Data Table List Kelas -->
<script>
    $(document).ready(function() {
        var table = $('#listKelas').DataTable({
            pageLength: 5,
            lengthMenu: [
                [5, 10, 20],
                [5, 10, 20]
            ]
        })
    });
</script>
<!-- End::Data Table List Kelas -->

<!-- Begin::Data Table Data Wali Kelas -->
<script>
    $(document).ready(function() {
        $('#dataWaliKelas').DataTable();
    });
</script>
<!-- End::Data Table Data Wali Kelas -->

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!--end::datatables-->