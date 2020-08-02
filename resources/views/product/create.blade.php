@extends('layout.mainlayout')
@section('content')
      <main>
			    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header panel-info"><h4 class="text-center font-weight-light my-4">Create Account</h4></div>
                                    <div class="card-body">
                                        <form method="POST" action=" {{route('product.store')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group"><label for="category">Category</label>
                                                        <select name="category" class="form-control" id="category">
                                                            <option value="">Select Category</option>
                                                            <option value="1" @if(old('category')) {{ 'selected' }} @endif>1</option>
                                                            <option value="2" @if(old('category')) {{ 'selected' }} @endif>2</option>
                                                            <option value="3" @if(old('category')) {{ 'selected' }} @endif>3</option>
                                                            <option value="4" @if(old('category')) {{ 'selected' }} @endif>4</option>
                                                            <option value="5" @if(old('category')) {{ 'selected' }} @endif>5</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('category'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('category') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>Name</label>
                                                        <input class="form-control py-4" id="name" name="name"  value="{{ old('name') }}" type="text"  />
                                                    </div>
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>Quantity</label>
                                                        <input class="form-control py-4" id="qty" name="qty" value="{{ old('qty') }}" type="number"  />
                                                    </div>
                                                    @if ($errors->has('qty'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('qty') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>Price</label>
                                                        <input class="form-control py-4" id="price" name="price" value="{{ old('price') }}" type="number"  />
                                                    </div>
                                                    @if ($errors->has('price'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('price') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>Model</label>
                                                        <input class="form-control py-4" id="model" name="model" value="{{ old('model') }}" type="text"  />
                                                    </div>
                                                    @if ($errors->has('model'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('model') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>SKU</label>
                                                        <input class="form-control py-4" id="sku" name="sku"  value="{{ old('sku') }}"type="text"  />
                                                    </div>
                                                    @if ($errors->has('sku'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('sku') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>Image</label>
                                                        <input class="" id="image" name="image" type="file"  />
                                                    </div>
                                                    @if ($errors->has('image'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('image') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group"><label>Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Select Status</option>
                                                            <option value="1" @if(old('status')) {{ 'status' }} @endif>Enable</option>
                                                            <option value="0" @if(old('status')) {{ 'status' }} @endif>Disable</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->has('status'))
                                                        <span class="text-danger">
                                                            <strong>{{ $errors->first('status') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group mt-6 mb-2">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
      </main>
@endsection
