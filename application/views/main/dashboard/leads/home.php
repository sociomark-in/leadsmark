<div class="page-content">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">All Leads (Source: Enquiries)</h6>
                        <div class="dropdown mb-2">
                            <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive mb-0" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    <?php foreach ($data['columns'] as $key => $column) : ?>
                                        <th class="pt-0"><?= $column['label'] ?></th>
                                    <?php endforeach ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['data'] as $key => $entity) : ?>
                                    <tr>
                                        <td><?= $key ?></td>
                                        <?php foreach ($entity as $key => $lead) : ?>
                                            <td><?= $lead ?></td>
                                        <?php endforeach ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <script>
                            let table = new DataTable('#leadsDataTable', {
                                autoWidth: false,
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
</div>