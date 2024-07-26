<x-layout>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <form class="d-flex align-items-center me-3" action="/asistens" method="GET">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="bi bi-search"></i>
                                    </button>
                                    <input type="search" id="search" name="search"
                                        class="form-control search-input" placeholder="Search..." autocomplete="off">
                                </form>
                                <button type="button" class="btn btn-success">
                                    Add New Asisten <span class="badge bg-transparent"><i
                                            class="bi bi-plus-circle"></i></span>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Nim</th>
                                                <th>Name Asisten</th>
                                                <th>Phone Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $number = 1;
                                        @endphp
                                        @foreach ($asistens as $asisten)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $number++ }}</td>
                                                    <td>{{ $asisten->nim }}</td>
                                                    <td>
                                                        {{ $asisten->name }}
                                                    </td>
                                                    <td>
                                                        {{ $asisten->phone_number }}
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="bi bi-trash3"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="bi bi-pen"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                    {{ $asistens->links() }}
                                </div>
                              
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
