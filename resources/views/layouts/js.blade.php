
<script>var hostUrl = "/";</script>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
    $('#datamatapelajaran').DataTable();
});
</script>
<script>
    $(document).ready(function () {
    $('#dataanggota').DataTable();
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!--end::datatables-->