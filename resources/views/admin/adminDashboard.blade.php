<x-admin-layout>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <h2 class="lg:mx-4 font-semibold text-xl text-gray-800 leading-tight mb-3">
        <!-- menampilkan variabel title yang dikirim dari controller-->
        {{ $title }}
    </h2>

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-5">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-semibold leading-normal text-sm">User</p>
                      <h5 class="mb-0 font-bold text-primary text-3xl">
                        {{ $count = DB::table('users')->count() }}
                        {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span> --}}
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="fas fa-users text-white leading-none text-lg relative top-3.5"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-semibold leading-normal text-sm">Package</p>
                      <h5 class="mb-0 font-bold text-primary text-3xl">
                        {{ $count = DB::table('packages')->count() }}
                        {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span> --}}
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="fas fa-ticket text-white leading-none text-lg relative top-3.5"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-semibold leading-normal text-sm">Comunity</p>
                      <h5 class="mb-0 font-bold text-primary text-3xl">
                        {{ $count = DB::table('comunities')->count() }}
                        {{-- <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span> --}}
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="fas fa-network-wired text-white leading-none text-lg relative top-3.5"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-semibold leading-normal text-sm">Sales</p>
                      <h5 class="mb-0 font-bold text-primary text-3xl">
                        0
                        {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span> --}}
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="mt-1 inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                      <i class="fas fa-shopping-cart text-white leading-none text-lg relative top-3.5"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- end cards -->
</x-admin-layout>
