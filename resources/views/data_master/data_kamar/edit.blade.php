@extends('layouts.app')
@section('page', 'Edit Data Bed')
@section('content')
    <div class="content-wrapper">
       <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Master /</span> @yield('page')</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <!-- <h5 class="mb-0">Basic with Icons</h5>
                      <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form action="{{route('data-bed.update', $data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Kamar</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              
                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="id_bed">
                                  <option selected>{{$data->id_kamar}}</option>
                                  @foreach($ruangan as $item)
                                  
                                  <option value="{{$item->id }}" @if ($data->nama_kamar == $item->nama_kamar) {{'selected'}} @endif>{{$item->nama_kamar }}</option>
                                  @endforeach
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kode Bed</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-barcode"></i
                              ></span>
                              <input
                                type="text"
                                name="id_bed"
                                value="{{$data->id_bed}}"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="001"
                                aria-label=""
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Bed</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-barcode"></i
                              ></span>
                              <input
                                type="text"
                                name="nama_bed"
                                value="{{$data->nama_bed}}"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Bed Kanker"
                                aria-label=""
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="bx bx-check"></i>Kirim</button>
                            <a href="{{ route('data-bed.index') }}" class="btn btn-danger"><i class="bx bx-revision"></i> Kembali</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
@endsection
