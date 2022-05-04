<template>
    <div class="bg-red fixed inset-x-0 top-0 py-5 uppercase text-center text-2xl flex justify-center items-center" v-show="error">
      <svg width="34" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.435 2.79 1.73 24a3 3 0 0 0 2.565 4.5h25.41A3 3 0 0 0 32.27 24L19.565 2.79a3.001 3.001 0 0 0-5.13 0v0ZM17 10.5v6M17 22.5h.014" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <div class="mx-5">{{ error }}</div>
      <svg width="34" height="30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.435 2.79 1.73 24a3 3 0 0 0 2.565 4.5h25.41A3 3 0 0 0 32.27 24L19.565 2.79a3.001 3.001 0 0 0-5.13 0v0ZM17 10.5v6M17 22.5h.014" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <h1 class="text-green text-5xl text-left mb-6">Vyberte si newslettre, ktoré&nbsp;chcete dostávať</h1>
    <div class="text-right">
      <a class="text-green uppercase underline underline-offset-2 text-xl" @click="selectAll">Chcem všetky!</a>
    </div>
    <div v-for="option in options" :key="option.id" class="mb-8">
        <NewsletterOption :option="option" :checked="selected.includes(option.id)" @checked="selectOption"></NewsletterOption>
        <div v-if="option.id == 'newsletter-3'" class="bg-gray-400 text-white py-4 px-6 text-xl mt-2.5" v-show="selected.includes('newsletter-3')">
          <div class="uppercase mb-4">Chcem dostávať newslettre:</div>
          <div class="flex">
            <EduOption v-for="edu_option in edu_options" :key="edu_option.id" :option="edu_option" :checked="selected.includes(edu_option.id)" @checked="selectOption"></EduOption>
          </div>
        </div>
    </div>
    <h2 class="text-green text-4xl text-left mt-2 mb-6">Zadajte vašu e-mailovú adresu</h2>
    <div class="flex mb-3">
      <input type="email" name="email" autocomplete="off" class="appearance-none rounded-none text-2xl grow p-6 placeholder-gray-500" placeholder="meno@doména.sk" v-model="email" />
      <button @click="submit" class="bg-green text-gray-500 text-2xl mx-auto py-6 px-16">Prihlásiť</button>
    </div>
    <div class="text-gray-300 text-2xl">Odoslaním súhlasíte so <a @click="toggleModal" class="underline underline-offset-2 hover:no-underline">spracovaním osobných údajov</a>.</div>
    <GdprModal @close="toggleModal" :visible="modalActive"></GdprModal>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import NewsletterOption from '../components/NewsletterOption.vue'
import EduOption from '../components/EduOption.vue'
import GdprModal from '../components/GdprModal.vue'

const router = useRouter()
const options = [
  {
    id: 'newsletter-1',
    title: 'Čo nové v SNG Bratislava?',
    description: 'Výstavy, programy, novinky, oznamy',
    frequency: '1 x za týždeň'
  },
  {
    id: 'newsletter-2',
    title: 'Web umenia',
    description: 'Online kolekcie, tematické články a voľné diela',
    frequency: '2 x za mesiac'
  },
  {
    id: 'newsletter-3',
    title: 'Edu.SNG',
    description: 'Vzdelávanie – kurzy, programy, školy, workshopy',
    frequency: '2 x za mesiac'
  },
  {
    id: 'newsletter-4',
    title: 'Schaubmarov mlyn v Pezinku',
    description: 'Výstavy a programy v najkrajšom sade',
    frequency: '1 x za mesiac'
  },
]

const edu_options = [
  {
    id: 'newsletter-rodina',
    title: 'Rodina',
  },
  {
    id: 'newsletter-dospely',
    title: 'Dospelý',
  },
  {
    id: 'newsletter-skola',
    title: 'Škola',
  },
]

const selected = ref([])
const email = ref(null)
const modalActive = ref(false)
const error = ref("");

const selectAll = () => {
    selected.value = [...options.map(o => o.id), ...edu_options.map(o => o.id)]
}

const selectOption = (optionId) => {
  if (selected.value.includes(optionId)) {
    selected.value = selected.value.filter(i => i !== optionId)
    return
  }
  selected.value.push(optionId)
}

const validateInput = () => {
  error.value = (!selected.value.length) ? "Vyberte si aspoň jeden z newslettrov v zozname" : "";

  if (error.value  === "") {
    error.value = (email.value === null || email.value === "") ? "Zadajte e-mailovú adresu" : "";
  }

  if (error.value  === "") {
    error.value = (isEmail(email.value)) ? "Zadajte platnú e-mailovú adresu" : "";
  }

  return (error.value === "")
}

const isEmail = (value) => {
  let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return !re.test(value);
}

const submit = () => {
  if (validateInput()) {
    router.push('/success')
  }
}

const toggleModal = () => {
  modalActive.value = !modalActive.value;
}


</script>