 <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','autofocus']) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class'=>'form-control', 'readonly', 'placeholder' => 'El slug del post se crea automáticamente al escribir el nombre']) !!}
                    
                    @error('slug')
                       <span class="text-danger">{{ $message }} </span>
                    @enderror
                    
                </div>

                <div class="form-group">
                    {!! Form::label('color', 'Color asignado: ') !!}
                    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
                    @error('color')
                        <br>
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>