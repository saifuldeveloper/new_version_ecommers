<?php

namespace App\DataTables\Backend;


use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;

class RolesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('role_name', function ($query) {
                return view('backend.user.role.column.role_name', compact('query'));
            })
            ->addColumn('created_at', function ($query) {
                return view('backend.user.role.column.created_at', compact('query'));
            })
            ->addColumn('action', function ($query) {
                return view('backend.user.role.column.action', compact('query'));
            })

            ->setRowId('id')
            ->setRowClass(function ($query) {
                return $query->someCondition ? 'ext-start text-muted fw-bold fs-7 text-uppercase gs-0' : '';
            });;
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Role $model): QueryBuilder
    {
        return $model
            ->when($this->request->search['value'] ?? false, function ($query, $value) {
                $query->where('name', 'like', '%' . $value . '%');
            })
            ->orderBy('id', 'desc')
            ->newQuery();
    }

    public function getTotalCount(): int
    {
        return Role::count();
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->buttons([])
            ->parameters([
                'dom' => 'Blfrtip',
                'footer_callback' => 'function (row, data, start, end, display) {
                var api = this.api(), data;
                var totalRecords = ' . $this->getTotalCount() . ';

                if (totalRecords > 0) {
                    data = api.column(0).data();
                    var count = data.length;

                    var pageInfo = api.page.info();
                    var currentPage = pageInfo.page + 1;
                    var totalPages = pageInfo.pages;

                    var countInfo = "Showing " + (start + 1) + " to " + (end + 1) + " of " + totalRecords + " entries";

                    $(".dataTables_info").html(countInfo);
                }
            }',
                'tfoot' => false,
                'buttons' => [],
                'pageLength' => 10,
                'lengthMenu' => [10, 25, 50, 100, 250],
                'paging' => true,
                'searching' => true,
                'info' => true,
                'searchDelay' => 350,
                'language' => [
                    'lengthMenu' => __('Per Page') . ' _MENU_ ',
                    'searchPlaceholder' => __('search role'),
                    'search' => '',
                ],


            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('id')->data('DT_RowIndex')
                ->title('#')->searchable(false)
                ->width(10),
            Column::computed('role_name')->title(__('Name'))
                ->addClass('min-w-125px'),
            Column::computed('created_at')->title(__('CREATE DATE')),
            Column::computed('action')
                ->title(__('ACTION'))
                ->addClass('text-end min-w-100px'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'Roles_' . date('YmdHis');
    }
}
