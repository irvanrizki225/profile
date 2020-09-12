{{-- resume --}}
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                      <li><a href="#page-1">Education</a></li>
                      <li><a href="#page-2">Experience</a></li>
                      <li><a href="#page-3">Skills</a></li>
                    </ul>
                  </nav>
                </div>
                
                <div class="col-md-9">
                  <div id="page-1" class= "page one">
                    <h2 class="heading">Education</h2>
                    
                    <div class="resume-wrap d-flex ftco-animate">
                      @forelse ($education1 as $education1)
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ $education1->tahun }}</span>
                            <h2>{{ $education1->jurusan }}</h2>
                            <span class="position">{{ $education1->name }}</span>
                        </div>
                        @empty
                        <tr>
                          <td colspan="6" class="text-centre p-5">
                             Data Tidak Tersedia
                          </td>
                        </tr>
                      @endforelse
                    </div>
                    
                    <div class="resume-wrap d-flex ftco-animate">
                      @forelse ($education2 as $education2)
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ $education2->tahun }}</span>
                            <h2>{{ $education2->jurusan }}</h2>
                            <span class="position">{{ $education2->name }}</span>
                        </div>
                        @empty
                        <tr>
                          <td colspan="6" class="text-centre p-5">
                             Data Tidak Tersedia
                          </td>
                        </tr>
                      @endforelse
                    </div>

                    <div class="resume-wrap d-flex ftco-animate">
                      @forelse ($education3 as $education3)
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ $education3->tahun }}</span>
                            <h2>{{ $education3->jurusan }}</h2>
                            <span class="position">{{ $education3->name }}</span>
                        </div>
                        @empty
                        <tr>
                          <td colspan="6" class="text-centre p-5">
                             Data Tidak Tersedia
                          </td>
                        </tr>
                      @endforelse
                    </div>
                   
                  </div>

                  <div id="page-2" class= "page two">
                    <h2 class="heading">Experience</h2>

                    <div class="resume-wrap d-flex ftco-animate">
                      @forelse ($experience3 as $experience3)
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ $experience3->tahun }}</span>
                            <h2>{{ $experience3->jabatan }}</h2>
                            <span class="position">{{ $experience3->name }}</span>
                            <p>{{ $experience3->describe }}</p>
                        </div>
                        @empty
                              <tr>
                                <td colspan="6" class="text-centre p-5">
                                  Data Tidak Tersedia
                                </td>
                              </tr>
                        @endforelse
                    </div>

                    <div class="resume-wrap d-flex ftco-animate">
                      @forelse ($experience2 as $experience2)
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ $experience2->tahun }}</span>
                            <h2>{{ $experience2->jabatan }}</h2>
                            <span class="position">{{ $experience2->name }}</span>
                            <p>{{ $experience2->describe }}</p>
                        </div>
                        @empty
                              <tr>
                                <td colspan="6" class="text-centre p-5">
                                  Data Tidak Tersedia
                                </td>
                              </tr>
                        @endforelse
                    </div>

                    <div class="resume-wrap d-flex ftco-animate">
                      @forelse ($experience1 as $experience1)
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ $experience1->tahun }}</span>
                            <h2>{{ $experience1->jabatan }}</h2>
                            <span class="position">{{ $experience1->name }}</span>
                            <p>{{ $experience1->describe }}</p>
                        </div>
                        @empty
                              <tr>
                                <td colspan="6" class="text-centre p-5">
                                  Data Tidak Tersedia
                                </td>
                              </tr>
                        @endforelse
                    </div>
                    
                  </div>
                  
                  <div id="page-3" class= "page three">
                      <h2 class="heading">Skills</h2>
                      <div class="row progress-circle mb-5">
                        <div class="col-lg-4 mb-4">
                          <div class="bg-white rounded-lg shadow p-4">
                            @forelse ($skill1 as $skill1)
                            <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill1->name }}</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='{{ $skill1->index }}'>
                              <span class="progress-left">
                              <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">{{ $skill1->index }}<sup class="small">%</sup></div>
                              </div>
                            </div>
                            <!-- END -->
                            @empty
                              <tr>
                                <td colspan="6" class="text-centre p-5">
                                  Data Tidak Tersedia
                                </td>
                              </tr>
                            @endforelse

                          </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                          <div class="bg-white rounded-lg shadow p-4">
                            @forelse ($skill2 as $skill2)
                            <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill2->name }}</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='{{ $skill2->index }}'>
                              <span class="progress-left">
                              <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">{{ $skill2->index }}<sup class="small">%</sup></div>
                              </div>
                            </div>
                            <!-- END -->
                            @empty
                              <tr>
                                <td colspan="6" class="text-centre p-5">
                                  Data Tidak Tersedia
                                </td>
                              </tr>
                            @endforelse
                          </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                          <div class="bg-white rounded-lg shadow p-4">
                            @forelse ($skill3 as $skill3)
                          <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill3->name }}</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='{{ $skill3->index }}'>
                              <span class="progress-left">
                              <span class="progress-bar border-primary"></span>
                                        </span>
                                        <span class="progress-right">
                              <span class="progress-bar border-primary"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">{{ $skill3->index }}<sup class="small">%</sup></div>
                              </div>
                            </div>
                            <!-- END -->
                            @empty
                              <tr>
                                <td colspan="6" class="text-centre p-5">
                                  Data Tidak Tersedia
                                </td>
                              </tr>
                            @endforelse

                          </div>
                        </div>
                      </div>

                      <div class="row">
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                  @forelse ($skill4 as $skill4)
                                    <h3>{{ $skill4->name }}</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{ $skill4->index }}"
                                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill4->index }}%">
                                        <span>{{ $skill4->index }}%</span>
                                          </div>
                                    </div>
                                    @empty
                                      <tr>
                                        <td colspan="6" class="text-centre p-5">
                                          Data Tidak Tersedia
                                        </td>
                                      </tr>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                  @forelse ($skill5 as $skill5)
                                    <h3>{{ $skill5->name }}</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-2" role="progressbar" aria-valuenow="{{ $skill5->index }}"
                                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill5->index }}%">
                                        <span>{{ $skill5->index }}%</span>
                                          </div>
                                          @empty
                                            <tr>
                                              <td colspan="6" class="text-centre p-5">
                                                Data Tidak Tersedia
                                              </td>
                                            </tr>
                                          @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                  @forelse ($skill6 as $skill6)
                                    <h3>{{ $skill6->name }}</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-3" role="progressbar" aria-valuenow="{{ $skill6->index }}"
                                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill6->index }}%">
                                        <span>{{ $skill6->index }}%</span>
                                          </div>
                                    </div>
                                    @empty
                                      <tr>
                                        <td colspan="6" class="text-centre p-5">
                                          Data Tidak Tersedia
                                        </td>
                                      </tr>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                  @forelse ($skill7 as $skill7)
                                    <h3>{{ $skill7->name }}</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-4" role="progressbar" aria-valuenow="{{ $skill7->index }}"
                                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill7->index }}%">
                                        <span>{{ $skill7->index }}%</span>
                                          </div>
                                    </div>
                                    @empty
                                      <tr>
                                        <td colspan="6" class="text-centre p-5">
                                          Data Tidak Tersedia
                                        </td>
                                      </tr>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                  @forelse ($skill8 as $skill8)
                                    <h3>{{ $skill8->name }}</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-5" role="progressbar" aria-valuenow="{{ $skill8->index}}"
                                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill8->index }}%">
                                        <span>{{ $skill8->index}}%</span>
                                          </div>
                                    </div>
                                    @empty
                                      <tr>
                                        <td colspan="6" class="text-centre p-5">
                                          Data Tidak Tersedia
                                        </td>
                                      </tr>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                  @forelse ($skill9 as $skill9)
                                    <h3>{{ $skill9->name }}</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-6" role="progressbar" aria-valuenow="{{ $skill9->index }}"
                                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill9->index }}%">
                                        <span>{{ $skill9->index }}%</span>
                                          </div>
                                    </div>
                                    @empty
                                      <tr>
                                        <td colspan="6" class="text-centre p-5">
                                          Data Tidak Tersedia
                                        </td>
                                      </tr>
                                    @endforelse
                                </div>
                            </div>
                            
                      </div>
                  </div>
                  
                </div>
          </div>
    </div>
</section>