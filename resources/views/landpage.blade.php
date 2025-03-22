<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Landing Page</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f3f4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#111517]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6_330)">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z"
                    fill="currentColor"
                  ></path>
                </g>
                <defs>
                  <clipPath id="clip0_6_330"><rect width="48" height="48" fill="white"></rect></clipPath>
                </defs>
              </svg>
            </div>
            <h2 class="text-[#111517] text-lg font-bold leading-tight tracking-[-0.015em]"> Web-Based Project Managment System</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              {{-- <a class="text-[#111517] text-sm font-medium leading-normal" href="/signup">Admin</a> --}}
              <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1d8cd7] text-white text-sm font-bold leading-normal tracking-[0.015em]"
              onclick="window.location.href='{{ route('admin.auth') }}'"
            >
              <span class="truncate">Admin</span>
            </button>
            <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1d8cd7] text-white text-sm font-bold leading-normal tracking-[0.015em]"
            onclick="window.location.href='{{ route('supervisor.index') }}'"
          >
            <span class="truncate">Supervisor</span>
          </button>
          <button
          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1d8cd7] text-white text-sm font-bold leading-normal tracking-[0.015em]"
          onclick="window.location.href='{{ route('student.index') }}'"
        >
          <span class="truncate">Students</span>
        </button>
              {{-- <a class="text-[#111517] text-sm font-medium leading-normal" href="/supervisor">Supervisors</a>
              <a class="text-[#111517] text-sm font-medium leading-normal" href="/student">Students</a> --}}
            </div>
            <div class="flex gap-2">
              {{-- <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1d8cd7] text-white text-sm font-bold leading-normal tracking-[0.015em]"
                onclick="window.location.href='{{ route('login') }}'"
              >
                <span class="truncate">Log in</span>
              </button> --}}
              {{-- <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#f0f3f4] text-[#111517] text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Sign up</span>
              </button> --}}
            </div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://cdn.usegalileo.ai/sdxl10/050c3b7a-e193-4cda-ac95-335b7150372d.png");'
                >
                  <div class="flex flex-col gap-2 text-left">
                    <h1
                      class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                    >
                        Effortless Project Management, Maximum Productivity 
                    </h1>
                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                        "Stay organized and boost productivity with our powerful Project Management System. Streamline tasks, collaborate effortlessly, and track progress in real time—all in one intuitive platform. Take control of your projects today!"
                    </h2>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1d8cd7] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                  >
                    <span class="truncate">Learn more</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="flex flex-col gap-4">
                <h1
                  class="text-[#111517] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Why choose our Project Management System ?
                </h1>
                <p class="text-[#111517] text-base font-normal leading-normal max-w-[720px]">
                    Manage projects with ease using our all-in-one solution. Assign tasks, set deadlines, and track team performance seamlessly. With real-time collaboration and insightful reports, staying on top of your projects has never been easier!
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 flex-col">
                  <div class="text-[#111517]" data-icon="Clock" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"
                      ></path>
                    </svg>
                  </div>
                  {{-- <div class="flex flex-col gap-1">
                    <h2 class="text-[#111517] text-base font-bold leading-tight">Fast and easy</h2>
                    <p class="text-[#647987] text-sm font-normal leading-normal">Generate an ideal schedule in minutes, not hours.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 flex-col">
                  <div class="text-[#111517]" data-icon="Calendar" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111517] text-base font-bold leading-tight">Seamless integration</h2>
                    <p class="text-[#647987] text-sm font-normal leading-normal">Connect with your university's existing systems and tools.</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 flex-col">
                  <div class="text-[#111517]" data-icon="Link" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M137.54,186.36a8,8,0,0,1,0,11.31l-9.94,10A56,56,0,0,1,48.38,128.4L72.5,104.28A56,56,0,0,1,149.31,102a8,8,0,1,1-10.64,12,40,40,0,0,0-54.85,1.63L59.7,139.72a40,40,0,0,0,56.58,56.58l9.94-9.94A8,8,0,0,1,137.54,186.36Zm70.08-138a56.08,56.08,0,0,0-79.22,0l-9.94,9.95a8,8,0,0,0,11.32,11.31l9.94-9.94a40,40,0,0,1,56.58,56.58L172.18,140.4A40,40,0,0,1,117.33,142,8,8,0,1,0,106.69,154a56,56,0,0,0,76.81-2.26l24.12-24.12A56.08,56.08,0,0,0,207.62,48.38Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111517] text-base font-bold leading-tight">Unlimited possibilities</h2>
                    <p class="text-[#647987] text-sm font-normal leading-normal">Create custom rules to accommodate any scheduling scenario.</p>
                  </div>
                </div>
              </div>
            </div> --}}

            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 flex-col">
                  <div class="text-[#111517]" data-icon="Tasks" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M216,48H40A16,16,0,0,0,24,64V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V64A16,16,0,0,0,216,48ZM40,64H216V192H40ZM96,104H176a8,8,0,0,1,0,16H96A8,8,0,0,1,96,104Zm0,40H176a8,8,0,0,1,0,16H96A8,8,0,0,1,96,144Z"></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111517] text-base font-bold leading-tight">Task Management</h2>
                    <p class="text-[#647987] text-sm font-normal leading-normal">Easily assign, track, and manage tasks across teams.</p>
                  </div>
                </div>
              
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 flex-col">
                  <div class="text-[#111517]" data-icon="Collaboration" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M160,104a40,40,0,1,0-40-40A40,40,0,0,0,160,104Zm0-64a24,24,0,1,1-24,24A24,24,0,0,1,160,40Zm64,152a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,192ZM40,168a8,8,0,0,1,8-8H96a8,8,0,0,1,0,16H48A8,8,0,0,1,40,168Zm112,0a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H160A8,8,0,0,1,152,168Zm0-40a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H160A8,8,0,0,1,152,128Zm-112,0a8,8,0,0,1,8-8H96a8,8,0,0,1,0,16H48A8,8,0,0,1,40,128Zm112-40a8,8,0,0,1,8-8h48a8,8,0,0,1,0,16H160A8,8,0,0,1,152,88Z"></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111517] text-base font-bold leading-tight">Team Collaboration</h2>
                    <p class="text-[#647987] text-sm font-normal leading-normal">Communicate and share updates with your team in real time.</p>
                  </div>
                </div>
              
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dce1e5] bg-white p-4 flex-col">
                  <div class="text-[#111517]" data-icon="Analytics" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM40,56H216V200H40ZM64,128a8,8,0,0,1,16,0v32a8,8,0,0,1-16,0Zm40-24a8,8,0,0,1,16,0v56a8,8,0,0,1-16,0Zm40-16a8,8,0,0,1,16,0v72a8,8,0,0,1-16,0Zm40-16a8,8,0,0,1,16,0v88a8,8,0,0,1-16,0Z"></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111517] text-base font-bold leading-tight">Progress Tracking</h2>
                    <p class="text-[#647987] text-sm font-normal leading-normal">Monitor project timelines and performance with detailed insights.</p>
                  </div>
                </div>
              </div>
              
            {{-- <h2 class="text-[#111517] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">What our users are saying</h2>
            <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
              <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://cdn.usegalileo.ai/sdxl10/e8ceecd9-43b1-41e5-92b8-8c0f63a91cc8.png");'
                  ></div>
                  <div class="flex-1">
                    <p class="text-[#111517] text-base font-medium leading-normal">Cynthia W.</p>
                    <p class="text-[#647987] text-sm font-normal leading-normal">2 weeks ago</p>
                  </div>
                </div>
                <div class="flex gap-0.5">
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <p class="text-[#111517] text-base font-normal leading-normal">
                  I absolutely love TimeSync! It's so much more efficient than manually creating my class schedule. I can't imagine going back to the old way.
                </p>
              </div>
              <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://cdn.usegalileo.ai/sdxl10/28ed0ec4-468e-4e56-862f-a4e25d434152.png");'
                  ></div>
                  <div class="flex-1">
                    <p class="text-[#111517] text-base font-medium leading-normal">Lance N.</p>
                    <p class="text-[#647987] text-sm font-normal leading-normal">1 month ago</p>
                  </div>
                </div>
                <div class="flex gap-0.5">
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#bcc6cd]" data-icon="Star" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M239.2,97.29a16,16,0,0,0-13.81-11L166,81.17,142.72,25.81h0a15.95,15.95,0,0,0-29.44,0L90.07,81.17,30.61,86.32a16,16,0,0,0-9.11,28.06L66.61,153.8,53.09,212.34a16,16,0,0,0,23.84,17.34l51-31,51.11,31a16,16,0,0,0,23.84-17.34l-13.51-58.6,45.1-39.36A16,16,0,0,0,239.2,97.29Zm-15.22,5-45.1,39.36a16,16,0,0,0-5.08,15.71L187.35,216v0l-51.07-31a15.9,15.9,0,0,0-16.54,0l-51,31h0L82.2,157.4a16,16,0,0,0-5.08-15.71L32,102.35a.37.37,0,0,1,0-.09l59.44-5.14a16,16,0,0,0,13.35-9.75L128,32.08l23.2,55.29a16,16,0,0,0,13.35,9.75L224,102.26S224,102.32,224,102.33Z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <p class="text-[#111517] text-base font-normal leading-normal">
                  TimeSync has been a game changer for our university. It's made the scheduling process much smoother for both students and faculty. Highly recommend!
                </p>
              </div>
              <div class="flex flex-col gap-3 bg-white"> --}}
                {{-- <div class="flex items-center gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://cdn.usegalileo.ai/sdxl10/02dae804-017f-473b-b971-727fe2eaa74d.png");'
                  ></div>
                  <div class="flex-1">
                    <p class="text-[#111517] text-base font-medium leading-normal">Tiffany R.</p>
                    <p class="text-[#647987] text-sm font-normal leading-normal">2 months ago</p>
                  </div>
                </div>
                <div class="flex gap-0.5">
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111517]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <p class="text-[#111517] text-base font-normal leading-normal">
                  The ability to sync your class schedule with other apps and services is a game changer. It's made my life so much easier. I highly recommend it to anyone who
                  needs to manage their time more effectively.
                </p>
              </div>
            </div> --}}
            {{-- <div class="@container">
              <div class="flex flex-col justify-end gap-6 px-4 py-10 @[480px]:gap-8 @[480px]:px-10 @[480px]:py-20">
                <div class="flex flex-col gap-2 text-center">
                  <h1
                    class="text-[#111517] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                  >
                    Ready to streamline your university scheduling?
                  </h1>
                </div>
                <div class="flex flex-1 justify-center">
                  <div class="flex justify-center">
                    <div class="flex flex-1 gap-3 flex-wrap max-w-[480px] justify-center">
                      <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1d8cd7] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] grow"
                      >
                        <span class="truncate">Sign up</span>
                      </button>
                      <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#f0f3f4] text-[#111517] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] grow"
                      >
                        <span class="truncate">Contact us</span>
                      </button>
                    </div> --}}

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-[#111517] text-white py-8">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
          
          <!-- Logo and Copyright -->
          <div class="text-center md:text-left mb-4 md:mb-0">
            <h2 class="text-lg font-bold">Project Management System</h2>
            <p class="text-sm text-[#dce1e5]">© 2025 All rights reserved.</p>
            <p class="text-sm text-[#dce1e5]">A project submited to the department of Software Engineering as supervised by Dr Maitanmi</p>
          </div>
      
          <!-- Navigation Links -->
          <div class="flex flex-wrap justify-center md:justify-start space-x-6">
            <a href="#" class="text-[#dce1e5] hover:text-white text-sm">Home</a>
            <a href="#" class="text-[#dce1e5] hover:text-white text-sm">Features</a>
            <a href="#" class="text-[#dce1e5] hover:text-white text-sm">Pricing</a>
            <a href="#" class="text-[#dce1e5] hover:text-white text-sm">Contact</a>
          </div>
      
          <!-- Social Media Icons -->
          <div class="flex space-x-4 mt-4 md:mt-0">
            <a href="#" class="text-[#dce1e5] hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM176,96H152v16h16a8,8,0,0,1,0,16H152v56a8,8,0,0,1-16,0V128H112a8,8,0,0,1,0-16h24V96a24,24,0,0,1,48,0Zm-24-8a8,8,0,1,1-8,8A8,8,0,0,1,152,88Z"></path>
              </svg>
            </a>
            <a href="#" class="text-[#dce1e5] hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                <path d="M224,56v144a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V56A16,16,0,0,1,48,40H208A16,16,0,0,1,224,56ZM112,168a40,40,0,1,0-40-40A40,40,0,0,0,112,168Zm64-56a8,8,0,1,1-8-8A8,8,0,0,1,176,112Zm-64-16a32,32,0,1,1-32,32A32,32,0,0,1,112,96Z"></path>
              </svg>
            </a>
            <a href="#" class="text-[#dce1e5] hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                <path d="M208,56V200a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V56A16,16,0,0,1,64,40H192A16,16,0,0,1,208,56ZM128,168a40,40,0,1,0-40-40A40,40,0,0,0,128,168Zm56-80a8,8,0,1,1-8-8A8,8,0,0,1,184,88Z"></path>
              </svg>
            </a>
          </div>
        </div>
      </footer>
      
  </body>
</html>
