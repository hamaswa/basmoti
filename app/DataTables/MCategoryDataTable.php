<?php

namespace App\DataTables;

use App\Mcategory;
use Yajra\DataTables\Services\DataTable;

class MCategoryDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'admin.mcategoryaction');
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Mcategory $model)
    {
        return $model->newQuery()->select('id', 'name');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            //->editColumn('id', 'ID: {{$id}}')
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['create', 'reset', 'reload'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'name'
        ];
    }


    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'MCategory_' . date('YmdHis');
    }
}
