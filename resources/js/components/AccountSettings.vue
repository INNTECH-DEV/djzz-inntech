<template>
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
        <form class="space-y-6 my-14" @submit.prevent="submitForm">
            <!-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
          <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
        </div>
        <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="company-website" class="block text-sm font-medium text-gray-700">Website</label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span>
                <input type="text" name="company-website" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="www.example.com" />
              </div>
            </div>
          </div>

          <div>
            <label for="about" class="block text-sm font-medium text-gray-700">About</label>
            <div class="mt-1">
              <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com" />
            </div>
            <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.</p>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Photo</label>
            <div class="mt-1 flex items-center space-x-5">
              <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </span>
              <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Change</button>
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">Cover photo</label>
            <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Detalii firma
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Introdu detaliile firmei tale.
                        </p>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label
                                    for="denumire_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Denumire firma</label
                                >
                                <input
                                    type="text"
                                    v-model="data.denumire_firma"
                                    name="denumire_firma"
                                    id="denumire_firma"
                                    autocomplete="denumire_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label
                                    for="cui_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >CUI/CIF firma</label
                                >
                                <input
                                    type="text"
                                    v-model="data.cui_firma"
                                    name="cui_firma"
                                    id="cui_firma"
                                    autocomplete="cui_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label
                                    for="reg_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nr. Reg. Com</label
                                >
                                <input
                                    type="text"
                                    v-model="data.reg_firma"
                                    name="reg_firma"
                                    id="reg_firma"
                                    autocomplete="text"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6">
                                <label
                                    for="adresa_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Adresa</label
                                >
                                <textarea
                                    type="text"
                                    v-model="data.adresa_firma"
                                    name="adresa_firma"
                                    id="adresa_firma"
                                    autocomplete="adresa_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label
                                    for="localitate_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Localitate</label
                                >
                                <input
                                    type="text"
                                    v-model="data.localitate_firma"
                                    name="localitate_firma"
                                    id="localitate_firma"
                                    autocomplete="localitate_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label
                                    for="judet_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Judet</label
                                >
                                <input
                                    type="text"
                                    v-model="data.judet_firma"
                                    name="judet_firma"
                                    id="judet_firma"
                                    autocomplete="address-level2"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="capital_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Capital social</label
                                >
                                <input
                                    type="text"
                                    v-model="data.capital_firma"
                                    name="capital_firma"
                                    id="capital_firma"
                                    autocomplete="address-level1"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="telefon_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Telefon</label
                                >
                                <input
                                    type="text"
                                    v-model="data.telefon_firma"
                                    name="telefon_firma"
                                    id="telefon_firma"
                                    autocomplete="telefon_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="fax_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Fax</label
                                >
                                <input
                                    type="text"
                                    v-model="data.fax_firma"
                                    name="fax_firma"
                                    id="fax_firma"
                                    autocomplete="fax_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="email_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Email</label
                                >
                                <input
                                    type="text"
                                    v-model="data.email_firma"
                                    name="email_firma"
                                    id="email_firma"
                                    autocomplete="email_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="website_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Website</label
                                >
                                <input
                                    type="text"
                                    v-model="data.website_firma"
                                    name="website_firma"
                                    id="website_firma"
                                    autocomplete="website_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="aditionale_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Date aditionale</label
                                >
                                <input
                                    type="text"
                                    v-model="data.aditionale_firma"
                                    name="aditionale_firma"
                                    id="aditionale_firma"
                                    autocomplete="aditionale_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Detalii administrator
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Introdu datele administratorului firmei.
                        </p>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nume_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nume</label
                                >
                                <input
                                    type="text"
                                    v-model="data.nume_administrator_firma"
                                    name="nume_administrator_firma"
                                    id="nume_administrator_firma"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="prenume_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Prenume</label
                                >
                                <input
                                    type="text"
                                    v-model="data.prenume_administrator_firma"
                                    name="prenume_administrator_firma"
                                    id="prenume_administrator_firma"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="email_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Email</label
                                >
                                <input
                                    type="text"
                                    v-model="data.email_administrator_firma"
                                    name="email_administrator_firma"
                                    id="email_administrator_firma"
                                    autocomplete="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="telefon_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Telefon</label
                                >
                                <input
                                    type="text"
                                    v-model="data.telefon_administrator_firma"
                                    name="telefon_administrator_firma"
                                    id="telefon_administrator_firma"
                                    autocomplete="telefon"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6">
                                <label
                                    for="adresa_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Adresa</label
                                >
                                <textarea
                                    type="text"
                                    v-model="data.adresa_administrator_firma"
                                    name="adresa_administrator_firma"
                                    id="adresa_administrator_firma"
                                    autocomplete="adresa_administrator_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label
                                    for="oras_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Oras</label
                                >
                                <input
                                    type="text"
                                    v-model="data.oras_administrator_firma"
                                    name="oras_administrator_firma"
                                    id="oras_administrator_firma"
                                    autocomplete="address-level2"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="judet_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Judet / sector</label
                                >
                                <input
                                    type="text"
                                    v-model="data.judet_administrator_firma"
                                    name="judet_administrator_firma"
                                    id="judet_administrator_firma"
                                    autocomplete="address-level1"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label
                                    for="tara_administrator_firma"
                                    class="block text-sm font-medium text-gray-700"
                                    >Tara</label
                                >
                                <input
                                    type="text"
                                    v-model="data.tara_administrator_firma"
                                    name="tara_administrator_firma"
                                    id="tara_administrator_firma"
                                    autocomplete="tara_administrator_firma"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Alte setari (in curand)
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Decide which communications you'd like to receive
                            and how.
                        </p>
                    </div>
                    <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
                        <fieldset>
                            <legend class="sr-only">By Email</legend>
                            <div
                                class="text-base font-medium text-gray-900"
                                aria-hidden="true"
                            >
                                By Email
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input
                                            id="comments"
                                            name="comments"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        />
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label
                                            for="comments"
                                            class="font-medium text-gray-700"
                                            >Comments</label
                                        >
                                        <p class="text-gray-500">
                                            Get notified when someones posts a
                                            comment on a posting.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input
                                            id="candidates"
                                            name="candidates"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        />
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label
                                            for="candidates"
                                            class="font-medium text-gray-700"
                                            >Candidates</label
                                        >
                                        <p class="text-gray-500">
                                            Get notified when a candidate
                                            applies for a job.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input
                                            id="offers"
                                            name="offers"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        />
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label
                                            for="offers"
                                            class="font-medium text-gray-700"
                                            >Offers</label
                                        >
                                        <p class="text-gray-500">
                                            Get notified when a candidate
                                            accepts or rejects an offer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend
                                class="contents text-base font-medium text-gray-900"
                            >
                                Push Notifications
                            </legend>
                            <p class="text-sm text-gray-500">
                                These are delivered via SMS to your mobile
                                phone.
                            </p>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                    <input
                                        id="push-everything"
                                        name="push-notifications"
                                        type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                    />
                                    <label
                                        for="push-everything"
                                        class="ml-3 block text-sm font-medium text-gray-700"
                                        >Everything</label
                                    >
                                </div>
                                <div class="flex items-center">
                                    <input
                                        id="push-email"
                                        name="push-notifications"
                                        type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                    />
                                    <label
                                        for="push-email"
                                        class="ml-3 block text-sm font-medium text-gray-700"
                                        >Same as email</label
                                    >
                                </div>
                                <div class="flex items-center">
                                    <input
                                        id="push-nothing"
                                        name="push-notifications"
                                        type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                    />
                                    <label
                                        for="push-nothing"
                                        class="ml-3 block text-sm font-medium text-gray-700"
                                        >No push notifications</label
                                    >
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div> -->

            <div class="flex justify-end">
                <button
                    type="submit"
                    class="fixed z-90 bottom-10 left-8 rounded-md border border-transparent bg-white py-2 px-4 text-sm font-medium text-indigo-600 shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Inapoi
                </button>
                <button
                    type="submit"
                    class="fixed z-90 bottom-10 right-8 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Salveaza
                </button>
            </div>
        </form>
    </div>

    {{ user }}
</template>

<script>
import { mapActions } from "vuex";
import { useToast } from "vue-toastification";

export default {
    name: "AccountSettings",
    setup() {
        const toast = useToast();

        return { toast };
    },
    data: function () {
        return {
            data: this.$store.state.auth.user,
        };
    },

    methods: {
        ...mapActions({
            refresh: "auth/refresh",
        }),
        submitForm: function () {
            this.create();
            console.log(this.data);
        },
        async create() {
            await axios.post("/api/user/update", this.data).then(({ data }) => {
                //TODO: De testat daca a avut succes sau nu si de afisat diferit
                this.toast.success(JSON.stringify(data));

                // Refresh la user ca sa fie updated
                this.refresh();
            });
        },
    },
};
</script>
