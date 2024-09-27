
<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-rose-50 dark:bg-rose-950 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="images/post-header-image.jpg"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-rose-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-rose-900 dark:text-rose-200 duration-300 ease-in-out hover:text-fuchsia-950 dark:hover:text-fuchsia-200"
                >{{ __('Technology') }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-rose-900 dark:text-rose-300 decoration-rose-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
                Generative AI
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-rose-800 dark:text-rose-200">
                What is Generative AI? <br>
                What are the benefits of Generative AI? <br>
                What are the risks of Generative AI? <br>
                Where should I start with Generative AI?<br>
                What are some practical uses of Generative AI today?
              </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="public/images/author.jpg"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-rose-800 dark:text-rose-200 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-rose-900 dark:text-rose-200 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename')) }}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-rose-800 dark:text-rose-200">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-rose-800 dark:text-rose-200">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="px-5 lg:px-0">
          <!-- Post Content -->
          <!-- Uses the official Tailwind CSS Typography plugin -->
          <div
            class="prose mx-auto sm:prose-lg prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-rose-900 text-rose-900 dark:text-rose-200 prose-img:rounded-xl"
          >
            <h2 class="text-rose-800 dark:text-rose-300"><u>What is Generative AI?</u></h2>
            <p>
            Generative AI refers to a class of artificial intelligence models capable of creating new content, such as text, images, music, and even entire virtual worlds. Unlike traditional AI, which primarily analyzes and classifies data, generative AI models, like GPT (Generative Pre-trained Transformer) and GANs (Generative Adversarial Networks), are designed to generate new data by learning from vast datasets. These models can write articles, generate code, compose music, create realistic images, and even simulate human-like conversations. Generative AI has significant applications in entertainment, design, content creation, and more, helping automate tasks that traditionally required human creativity. However, it also raises concerns regarding authenticity, ownership of generated content, and ethical misuse, such as creating deepfakes or spreading misinformation. As generative AI continues to evolve, it opens new possibilities while demanding responsible usage and governance to ensure its benefits are realized without harmful consequences.
            </p>
            <h2 class="text-rose-800 dark:text-rose-300"><u>What are the benefits of Generative AI?</u></h2>
            <p>
            Generative AI offers numerous benefits across various fields by automating creative and repetitive tasks, boosting productivity, and enabling innovative applications. One of the primary advantages is content generation, where AI can write articles, create art, design products, and even develop code, significantly speeding up processes that would otherwise require human effort. It enhances creativity by offering new perspectives and ideas that humans might not have considered. In healthcare, generative AI can help design new drugs, simulate medical procedures, and create personalized treatment plans. In entertainment and media, it allows for the creation of realistic virtual environments, characters, and stories, pushing the boundaries of immersive experiences. Businesses also benefit from AI's ability to generate customer interactions, marketing materials, and even data analysis reports. Overall, generative AI improves efficiency, opens up new creative possibilities, and helps solve complex problems more effectively in various sectors.
            </p>
            <h2 class="text-rose-800 dark:text-rose-300"><u>What are the risks of Generative AI?</u></h2>
            <p>
            Generative AI poses significant risks that need careful attention. One of the primary concerns is the potential for misuse in creating deepfakes, where realistic but fake videos or images can spread misinformation, fuel fraud, or harm reputations. This technology also raises ethical issues, such as ownership and authorship of AI-generated content, as it's unclear who should hold the rights to creations made by AI. Furthermore, generative AI can amplify biases present in the training data, leading to the production of biased or harmful content. In areas like customer service and education, over-reliance on AI could diminish human oversight, leading to impersonal or incorrect responses. Additionally, there's the risk of job displacement as automation encroaches on creative and analytical fields traditionally dominated by humans. The rapid advancement of generative AI requires the development of robust ethical guidelines and regulatory frameworks to mitigate these risks while ensuring responsible use.
            </p>
            <figure>
              <img src="images/post-content-image-tech.jpg" />
              <figcaption>
                Generative AI
              </figcaption>
            </figure>
            <h2 class="text-rose-800 dark:text-rose-300"><u>Where should I start with Generative AI?</u></h2>
            <p>
            Many enterprises have generative AI pilots for code generation, text generation or visual design underway. To establish a pilot, you can take one of three routes:
            </p>
            <ul>
              <li>
              <b>Off-the-shelf.</b> Use an existing foundational model directly by inputting prompts. You might, for example, ask the model to create a job description for a software engineer or suggest alternative subject lines for marketing emails.
              </li>
              <li><b>Prompt engineering.</b> Program and connect software to and leverage a foundational model. This technique, which is the most common of the three, allows you to use public services while protecting IP and leveraging private data to create more precise, specific and useful responses. Building an HR benefits chatbot that answers employee questions about company-specific policies is an example of prompt engineering.</li>
              <li>
              <b>Custom.</b> Building a new foundational model goes beyond the reach of most companies, but it's possible to tune a model. This involves adding a layer or proprietary data in a way that significantly alters the way the foundational model behaves. While costly, customizing a model offers the highest level of flexibility.
              </li>
            </ul>
            <h2 class="text-rose-800 dark:text-rose-300"><u>What are some practical uses of Generative AI today?</u></h2>
            <h3 class="text-rose-800 dark:text-rose-300">The field of generative AI will progress rapidly in both scientific discovery and technology commercialization, but use cases are emerging quickly in creative content, content improvement, synthetic data, generative engineering and generative design.</h3>
            <p>
            In-use, high-level practical applications today include the following:
            </p>
            <ul>
              <li>
              <b>Written content augmentation and creation:</b>Producing a “draft” output of text in a desired style and length.
              </li>
              <li><b>Question answering and discovery:</b>Enabling users to locate answers to input, based on data and prompt information</li>
              <li>
              <b>Chatbot performance improvement:</b>Bettering “sentity” extraction, whole-conversation sentiment classification and generation of journey flows from general descriptions</li>
            </ul>
            <blockquote>
              <p>
              "Generative AI is not just a tool for automation, but a catalyst for creativity, opening new doors while challenging us to shape its impact responsibly."
              </p>
            </blockquote>
            <p>
              Lorem ipsum dolor sit amet quis at praesent erat. Egestas justo ut
              tempus elementum aenean luctus <a href="#">an awesome link</a> fusce
              curabitur at malesuada.
            </p>
            <p>
              Lorem ipsum dolor sit amet fermentum eget porta. Semper auctor
              tellus laoreet ut vulputate ullamcorper fringilla gravida dictum.
              Malesuada arcu aliquet cras molestie viverra vulputate netus dolore
              aliquam dictum ornare ullamcorper. Erat pretium bibendum dolore quis
              dictum vivamus libero curabitur consequat donec. Netus rhoncus
              adipiscing netus non urna egestas mattis mollis nullam odio diam
              dolore aenean.
            </p>
            <p>
              Lorem ipsum dolor sit amet quis habitasse rhoncus ac lobortis
              sapien.
            </p>
            <ol>
              <li>Lorem ipsum dolor sit amet volutpat bibendum iaculis.</li>
              <li>
                Tortor porttitor elit nibh laoreet consectetur sodales imperdiet
                congue duis blandit tempor phasellus.
              </li>
              <li>
                Enim porta tincidunt non do gravida habitasse hendrerit convallis.
              </li>
            </ol>
            <p>
              Lorem ipsum dolor sit amet interdum incididunt tortor euismod
              porttitor. Pulvinar consequat semper urna arcu etiam facilisi
              elementum aenean dictumst aliquet urna elementum facilisi. Labore
              duis fusce facilisi justo aliqua dictum et suspendisse dui dictum
              integer. Elementum scelerisque posuere eleifend fermentum tempus
              mauris elit enim etiam massa ornare congue. Hac pretium elit aliquam
              augue dolore duis leo congue fringilla condimentum semper pretium
              incididunt.
            </p>
            <p>
              Est mattis enim eleifend donec erat eget tristique. Dictum habitasse
              duis elementum feugiat elit pretium nisl curabitur lacus risus.
              Condimentum vivamus hac vestibulum mauris aliquet massa ultrices
              molestie. Tempor ut blandit fermentum id nisi facilisi turpis non.
              Eleifend duis aliqua eu dapibus lacus consequat quam pulvinar et
              aliqua luctus fames feugiat.
            </p>
          </div>

          <!-- Post Footer -->
          <footer
            class="divide-y-rose-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Tags -->
            <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-rose-300/70 bg-transparent px-4 py-1 text-sm font-medium text-rose-900 dark:text-rose-100 transition duration-300 ease-in-out hover:text-black dark:text-rose-50 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-rose-300/70 bg-transparent px-4 py-1 text-sm font-medium text-rose-900 dark:text-rose-200 transition duration-300 ease-in-out hover:text-black dark:text-rose-50 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-rose-300/70 bg-transparent px-4 py-1 text-sm font-medium text-rose-900 dark:text-rose-200 transition duration-300 ease-in-out hover:text-black dark:text-rose-50 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-rose-300/70 bg-transparent px-4 py-1 text-sm font-medium text-rose-900 dark:text-rose-200 transition duration-300 ease-in-out hover:text-black dark:text-rose-50 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-rose-300/70 bg-transparent px-4 py-1 text-sm font-medium text-rose-900 dark:text-rose-200 transition duration-300 ease-in-out hover:text-black dark:text-rose-50 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
              <div class="flex items-center justify-between">
                <span class="text-lg font-medium text-rose-900 dark:text-rose-200"> Share </span>

                <!-- Social Links -->
                <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-rose-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="public/images/author.jpg"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-rose-800 dark:text-rose-200">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-rose-900 dark:text-rose-200 md:tracking-tight lg:leading-tight"
                        >
                          {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-rose-300">
                    I'm a student deeply drawn to the world of learning and discovery. My journey through academia is not just about earning grades; it's about embracing every
opportunity to learn and grow, both intellectually and creatively.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                        <li>
                            <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                            <x-dynamic-component :component="$link['name']" />
                            </a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
