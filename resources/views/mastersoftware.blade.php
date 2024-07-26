<x-layout>
    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Code</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Design</h6>
                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Analysis</h6>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Other</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <form class="d-flex align-items-center me-3" action="/softwares" method="GET">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="bi bi-search"></i>
                                    </button>
                                    <input type="search" id="search" name="search"
                                        class="form-control search-input" placeholder="Search..." autocomplete="off">
                                </form>
                                <button type="button" class="btn btn-primary me-2">
                                    Request New Software <span class="badge bg-transparent"><i
                                            class="bi bi-send-plus"></i></span>
                                </button>
                                <button type="button" class="btn btn-success">
                                    Add New Software <span class="badge bg-transparent"><i
                                            class="bi bi-plus-circle"></i></span>
                                </button>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Name Software</th>
                                                <th>Category Software</th>
                                                <th>Licence</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $number = 1;
                                        @endphp
                                        @foreach ($softwares as $software)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $number++ }}</td>
                                                    <td>{{ $software->name_software }}</td>
                                                    <td>
                                                        {{ $software->category_software }}
                                                    </td>
                                                    <td>
                                                        @if ($software->licence === 'need')
                                                            Butuh Licence
                                                        @else
                                                            Tidak Butuh
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="bi bi-trash3"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="bi bi-pen"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                    {{ $softwares->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
