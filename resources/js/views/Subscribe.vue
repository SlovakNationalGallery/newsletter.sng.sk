<template>
    <h1 class="text-green text-6xl text-left mb-6">Vyberte si newslettre, ktoré chcete dostávať</h1>
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
    <h2 class="text-green text-5xl text-left mt-14 mb-8">Zadajte vašu e-mailovú adresu</h2>
    <div class="flex mb-3">
      <input type="email" name="email" class="appearance-none rounded-none text-3xl grow p-6 placeholder-gray-500" placeholder="meno@doména.sk" />
      <button @click="submit" class="bg-green text-gray-500 text-3xl mx-auto py-6 px-16">Prihlásiť</button>
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
const modalActive = ref(false)

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

const submit = () => {
  console.log(selected)
  router.push('/success')
}

const toggleModal = () => {
  modalActive.value = !modalActive.value;
}


</script>