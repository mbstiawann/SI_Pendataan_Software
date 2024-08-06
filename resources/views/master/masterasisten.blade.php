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
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#border-less">
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

<div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input New Asisten</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="col-md-12">
                    <form method="POST" action="{{ url('/softwares') }}">
                        @csrf

                        <div class="form-group">
                            <label for="basicInput">NIM</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Input Your NIM"
                                name="nim">
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Input Your Name"
                                name="name">
                        </div>

                        <div class="form-group">
                            <label for="helpInputTop">Gender</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="sex">
                                    <option>Choose Gender...</option>
                                    <option value="man">Man</option>
                                    <option value="woman">Woman</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="helperText">Phone Number</label>
                            <input type="text" class="form-control" id="basicInput"
                                placeholder="Input Your Phone Number" name="phone_number">
                        </div>

                        <div class="form-group">
                            <label for="helpInputTop">Study Program</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="study_program">
                                    <option>Choose Study...</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="form-group">
                            <label for="helperText">Join Date</label>
                            <input type="date" class="form-control" id="basicInput"
                                placeholder="Input Software Slug" name="join_date">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                            <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
