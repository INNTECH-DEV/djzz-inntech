<template>
    <Header />
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 my-20">
        <form class="space-y-6" action="#" @submit.prevent="submitForm">
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Date Personale
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Va rugam sa introduceti datele personale ale
                            clientului
                        </p>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nume_client"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nume</label
                                >
                                <input
                                    v-model="data.nume_client"
                                    type="text"
                                    name="nume_client"
                                    id="nume_client"
                                    autocomplete="nume_client"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="prenume_client"
                                    class="block text-sm font-medium text-gray-700"
                                    >Prenume</label
                                >
                                <input
                                    v-model="data.prenume_client"
                                    type="text"
                                    name="prenume_client"
                                    id="prenume_client"
                                    autocomplete="prenume_client"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="email"
                                    class="block text-sm font-medium text-gray-700"
                                    >Email</label
                                >
                                <input
                                    v-model="data.email_client"
                                    type="text"
                                    name="email"
                                    id="email"
                                    autocomplete="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nlc"
                                    class="block text-sm font-medium text-gray-700"
                                    >NLC</label
                                >
                                <input
                                    v-model="data.nlc"
                                    type="text"
                                    name="nlc"
                                    id="nlc"
                                    autocomplete="nlc"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="cod_client"
                                    class="block text-sm font-medium text-gray-700"
                                    >Cod client</label
                                >
                                <input
                                    v-model="data.cod_client"
                                    type="text"
                                    name="cod_client"
                                    id="cod_client"
                                    autocomplete="cod_client"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nr_carte_funciara"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nr. Carte funciara</label
                                >
                                <input
                                    v-model="data.nr_carte_funciara"
                                    type="text"
                                    name="nr_carte_funciara"
                                    id="nr_carte_funciara"
                                    autocomplete="nr_carte_funciara"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nr_cadastral"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nr. Cadastral</label
                                >
                                <input
                                    v-model="data.nr_cadastral"
                                    type="text"
                                    name="nr_cadastral"
                                    id="nr_cadastral"
                                    autocomplete="nr_cadastral"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="cnp"
                                    class="block text-sm font-medium text-gray-700"
                                    >CNP</label
                                >
                                <input
                                    v-model="data.cnp"
                                    type="text"
                                    name="cnp"
                                    id="cnp"
                                    autocomplete="cnp"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="serie_buletin"
                                    class="block text-sm font-medium text-gray-700"
                                    >Serie buletin</label
                                >
                                <input
                                    v-model="data.serie_buletin"
                                    type="text"
                                    name="serie_buletin"
                                    id="serie_buletin"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nr_buletin"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nr. Buletin</label
                                >
                                <input
                                    v-model="data.nr_buletin"
                                    type="text"
                                    name="nr_buletin"
                                    id="nr_buletin"
                                    autocomplete="nr_buletin"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="telefon_client"
                                    class="block text-sm font-medium text-gray-700"
                                    >Telefon</label
                                >
                                <input
                                    v-model="data.telefon_client"
                                    type="text"
                                    name="telefon_client"
                                    id="telefon_client"
                                    autocomplete="telefon_client"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 border-b mt-4 font-bold">
                                <p>Adresa domiciliu</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="localitate"
                                    class="block text-sm font-medium text-gray-700"
                                    >Localitate</label
                                >
                                <input
                                    v-model="data.localitate"
                                    type="text"
                                    name="localitate"
                                    id="localitate"
                                    autocomplete="localitate"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="judet"
                                    class="block text-sm font-medium text-gray-700"
                                    >Judet</label
                                >
                                <input
                                    v-model="data.judet"
                                    type="text"
                                    name="judet"
                                    id="judet"
                                    autocomplete="cod_postal"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="cod_postal"
                                    class="block text-sm font-medium text-gray-700"
                                    >Cod Postal</label
                                >
                                <input
                                    v-model="data.cod_postal"
                                    type="text"
                                    name="cod_postal"
                                    id="cod_postal"
                                    autocomplete="cod_postal"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label
                                    for="strada"
                                    class="block text-sm font-medium text-gray-700"
                                    >Strada</label
                                >
                                <input
                                    v-model="data.strada"
                                    type="text"
                                    name="strada"
                                    id="strada"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="nr_strada"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nr.</label
                                >
                                <input
                                    v-model="data.nr_strada"
                                    type="text"
                                    name="nr_strada"
                                    id="nr_strada"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="bloc"
                                    class="block text-sm font-medium text-gray-700"
                                    >Bloc</label
                                >
                                <input
                                    v-model="data.bloc"
                                    type="text"
                                    name="bloc"
                                    id="bloc"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="scara"
                                    class="block text-sm font-medium text-gray-700"
                                    >Scara</label
                                >
                                <input
                                    v-model="data.scara"
                                    type="text"
                                    name="scara"
                                    id="scara"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="etaj"
                                    class="block text-sm font-medium text-gray-700"
                                    >Etaj</label
                                >
                                <input
                                    v-model="data.etaj"
                                    type="text"
                                    name="etaj"
                                    id="etaj"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="apartament"
                                    class="block text-sm font-medium text-gray-700"
                                    >Apartament</label
                                >
                                <input
                                    v-model="data.apartament"
                                    type="text"
                                    name="apartament"
                                    id="apartament"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 border-b mt-4 font-bold">
                                <p>Adresa loc de consum</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="localitate_consum"
                                    class="block text-sm font-medium text-gray-700"
                                    >Localitate</label
                                >
                                <input
                                    v-model="data.localitate_consum"
                                    type="text"
                                    name="localitate_consum"
                                    id="localitate_consum"
                                    autocomplete="localitate_consum"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="judet_consum"
                                    class="block text-sm font-medium text-gray-700"
                                    >Judet</label
                                >
                                <input
                                    v-model="data.judet_consum"
                                    type="text"
                                    name="judet_consum"
                                    id="judet_consum"
                                    autocomplete="judet_consum"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="cod_postal"
                                    class="block text-sm font-medium text-gray-700"
                                    >Cod Postal</label
                                >
                                <input
                                    v-model="data.cod_postal_consum"
                                    type="text"
                                    name="cod_postal_consum"
                                    id="cod_postal_consum"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-6">
                                <label
                                    for="strada_consum"
                                    class="block text-sm font-medium text-gray-700"
                                    >Strada</label
                                >
                                <input
                                    v-model="data.strada_consum"
                                    type="text"
                                    name="strada_consum"
                                    id="strada_consum"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="nr_strada_consum"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nr.</label
                                >
                                <input
                                    v-model="data.nr_strada_consum"
                                    type="text"
                                    name="nr_strada_consum"
                                    id="nr_strada_consum"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="bloc_consum"
                                    class="block text-sm font-medium text-gray-700"
                                    >Bloc</label
                                >
                                <input
                                    v-model="data.bloc_consum"
                                    type="text"
                                    name="bloc_consum"
                                    id="bloc_consum"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="scara_consum"
                                    class="block text-sm font-medium text-gray-700"
                                    >Scara</label
                                >
                                <input
                                    v-model="data.scara_consum"
                                    type="text"
                                    name="scara_consum"
                                    id="scara_consum"
                                    autocomplete="scara_consum"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="last-name"
                                    class="block text-sm font-medium text-gray-700"
                                    >Etaj</label
                                >
                                <input
                                    v-model="data.etaj_consum"
                                    type="text"
                                    name="last-name"
                                    id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="last-name"
                                    class="block text-sm font-medium text-gray-700"
                                    >Apartament2</label
                                >
                                <input
                                    v-model="data.apartament_consum"
                                    type="text"
                                    name="last-name"
                                    id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 border-b mt-4 font-bold">
                                <p>Contract</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="valoare-contract"
                                    class="block text-sm font-medium text-gray-700"
                                    >Valore contract</label
                                >
                                <input
                                    v-model="data.valoare_contract"
                                    type="text"
                                    name="valoare_contract"
                                    id="valoare_contract"
                                    autocomplete="valoare_contract"
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
                            Date Tehnice
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Va rugam sa introduceti datele tehnice
                        </p>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nr_panouri"
                                    class="block text-sm font-medium text-gray-700"
                                    >Numar panouri fotovoltaice</label
                                >
                                <input
                                    v-model="data.nr_panouri"
                                    type="text"
                                    name="nr_panouri"
                                    id="nr_panouri"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    htmlFor="last-name"
                                    class="block text-sm font-medium text-gray-700"
                                >
                                    Puterea unui panou fotovoltaic
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <input
                                        type="text"
                                        name="putere_panou"
                                        v-model="data.putere_panou"
                                        id="price"
                                        className="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="0.00"
                                        aria-describedby="price-currency"
                                    />
                                    <div
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"
                                    >
                                        <span
                                            class="text-gray-500 sm:text-sm"
                                            id="price-currency"
                                        >
                                            Wp
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nume_invertor"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nume invertor</label
                                >
                                <input
                                    v-model="data.nume_invertor"
                                    type="text"
                                    name="nume_invertor"
                                    id="nume_invertor"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    htmlFor="last-name"
                                    class="block text-sm font-medium text-gray-700"
                                >
                                    Puterea invertorului
                                </label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <input
                                        type="text"
                                        name="putere_invertor"
                                        id="price"
                                        v-model="data.putere_invertor"
                                        className="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="0.00"
                                        aria-describedby="price-currency"
                                    />
                                    <div
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"
                                    >
                                        <span
                                            class="text-gray-500 sm:text-sm"
                                            id="price-currency"
                                        >
                                            W
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            AFM
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Va rugam sa introduceti datele pentru dosarul AFM
                        </p>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="producator_invertor"
                                    class="block text-sm font-medium text-gray-700"
                                    >Producator invertor</label
                                >
                                <input
                                    v-model="data.producator_invertor"
                                    type="text"
                                    name="producator_invertor"
                                    id="producator_invertor"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="serie_invertor"
                                    class="block text-sm font-medium text-gray-700"
                                    >Serie invertor</label
                                >
                                <input
                                    v-model="data.serie_invertor"
                                    type="text"
                                    name="serie_invertor"
                                    id="serie_invertor"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="model_invertor"
                                    class="block text-sm font-medium text-gray-700"
                                    >Model invertor</label
                                >
                                <input
                                    v-model="data.model_invertor"
                                    type="text"
                                    name="model_invertor"
                                    id="model_invertor"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nume_smartmeter"
                                    class="block text-sm font-medium text-gray-700"
                                    >Nume smartmeter</label
                                >
                                <input
                                    v-model="data.nume_smartmeter"
                                    type="text"
                                    name="nume_smartmeter"
                                    id="nume_smartmeter"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="serie_smartmeter"
                                    class="block text-sm font-medium text-gray-700"
                                    >Serie smartmeter</label
                                >
                                <input
                                    v-model="data.serie_smartmeter"
                                    type="text"
                                    name="serie_smartmeter"
                                    id="serie_smartmeter"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="nr_afm"
                                    class="block text-sm font-medium text-gray-700"
                                    >Numar dosar AFM</label
                                >
                                <input
                                    v-model="data.nr_afm"
                                    type="text"
                                    name="nr_afm"
                                    id="nr_afm"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="serie_factura_finala"
                                    class="block text-sm font-medium text-gray-700"
                                    >Serie factura finala</label
                                >
                                <input
                                    v-model="data.serie_factura_finala"
                                    type="text"
                                    name="serie_factura_finala"
                                    id="serie_factura_finala"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="data_factura_finala"
                                    class="block text-sm font-medium text-gray-700"
                                    >Data factura finala</label
                                >
                                <input
                                    v-model="data.data_factura_finala"
                                    type="text"
                                    name="data_factura_finala"
                                    id="data_factura_finala"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="atr"
                                    class="block text-sm font-medium text-gray-700"
                                    >ATR</label
                                >
                                <input
                                    v-model="data.atr"
                                    type="text"
                                    name="atr"
                                    id="atr"
                                    autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button
                    type="button"
                    class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Save
                </button>
            </div>
        </form>
    </div>
    <Footer />
</template>

<script>
import { mapActions } from "vuex";
import { useToast } from "vue-toastification";
import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";

export default {
    name: "AccountSettings",
    setup() {
        const toast = useToast();

        return { toast };
    },
    data: function () {
        return {
            data: {},
        };
    },

    mounted: function () {
        axios
            .post("/api/client/show", { id: this.$route.params.id })
            .then(({ data }) => {
                console.log(data);
                console.log(this.$route.params.id);
                this.data = data;
            });
    },

    methods: {
        submitForm: function () {
            this.create();
            console.log(this.data);
        },
        async create() {
            await axios
                .post("/api/client/update", {
                    client: this.data,
                    id: this.$route.params.id,
                })
                .then(({ data }) => {
                    this.toast.success(JSON.stringify(data));
                })
                .catch((err) => {
                    this.toast.error(JSON.stringify(err.message));
                    console.log(err);
                });
        },
    },
};
</script>
