<section id="footer">
    <div class="bg-white mt-10">
      
      {{-- Thank You Section --}}
      <div class="grid grid-cols-1 md:grid-cols-2">
        <img src="{{ asset('assets/img/footer1.png') }}" class="w-full h-96 object-cover" />

        <div class="bg-white flex flex-col justify-center items-end p-10 space-y-10">
          <div class="py-4 px-7 bg-[#172e45] text-white rounded-2xl inline-block">
            <h1 class="text-5xl font-bold text-white text-right">THANK YOU!</h1>
          </div>

          <p class="text-2xl text-right text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, turpis et tincidunt pretium, 
            urna orci cursus enim, vel dapibus nisl nisi vel erat. Suspendisse potenti. 
            Donec euismod justo nec justo tincidunt, vel malesuada mauris bibendum.
          </p>
        </div>
      </div>

      {{-- Footer --}}
      <footer class="footer footer-horizontal footer-center bg-[#172e45] text-primary-content p-2">
        <aside class="text-lg space-y-0">
          <div>
            <img src="{{ asset('assets/img/footer2.png') }}" class="mx-auto mb-1 w-48 h-auto" alt="Footer Logo">
          </div>

          <div class="h-[1px] w-[243%] bg-white mt-0 mb-1"></div>

          <p class="font-bold text-center">
            ACME Industries Ltd.<br />
            Providing reliable tech since 1992
          </p>

          <p class="text-center">
            Copyright © { fufufafa Kelompok 5 Kece Abiess() } - All rights reserved
          </p>
        </aside>

        <nav>
          <div class="grid grid-flow-col gap-6">
            {{-- Twitter --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 
                  1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 
                  0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 
                  2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 
                  2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 
                  1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 
                  2.04 2.179 1.397 4.768 2.212 7.548 2.212 
                  9.142 0 14.307-7.721 13.995-14.646.962-.695 
                  1.797-1.562 2.457-2.549z" />
              </svg>
            </a>

            {{-- YouTube --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 
                  0-3.897.266-4.356 2.62-4.385 8.816.029 
                  6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 
                  15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 
                  12.816v-8l8 3.993-8 4.007z" />
              </svg>
            </a>

            {{-- Facebook --}}
            <a>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 
                  1.115-1.333h2.885v-5h-3.808c-3.596 
                  0-5.192 1.583-5.192 4.615v3.385z" />
              </svg>
            </a>
          </div>
        </nav>
      </footer>
    </div>
  </section>