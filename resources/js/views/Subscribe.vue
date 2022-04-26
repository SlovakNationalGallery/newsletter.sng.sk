<template>
    <h1 class="text-green text-6xl text-left mb-14">Vyberte si newslettre, ktoré chete dostávať</h1>
    <div v-for="(option, index) in options">
        <NewsletterOption :option="option"></NewsletterOption>
    </div>
</template>

<script setup>
import NewsletterOption from '../components/NewsletterOption.vue'

const options = [
  {
    id: 'newsletter-1',
    title: 'Čo nové v SNG Bratislava?',
    description: 'Výstavy, programy, novinky, oznamy...',
    frequency: 'Jedenkrát týždenne'
  },
  {
    id: 'newsletter-2',
    title: 'Web umenia',
    description: 'Online kolekcie, tematické články a voľné diela',
    frequency: 'Dvakrát mesačne'
  },
  {
    id: 'newsletter-3',
    title: 'Edu.SNG',
    description: 'Vzdelávanie – kurzy, programy, školy, workshopy',
    frequency: 'Dvakrát mesačne'
  },
  {
    id: 'newsletter-4',
    title: 'Schaubmarov mlyn v Pezinku',
    description: 'Výstavy a programy v najkrajšom sade',
    frequency: 'Jedenkrát mesačne'
  },
]
</script>