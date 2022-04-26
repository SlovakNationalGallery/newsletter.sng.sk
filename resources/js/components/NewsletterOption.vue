<template>
    <div class="flex items-center mb-8">
      <div class="grow">
        <label :for="props.option.id" class="cursor-pointer">
          <div class="text-5xl text-gray-50">{{ props.option.title }}</div>
          <div class="text-3xl text-white">{{ props.option.description }}</div>
          <div class="text-2xl text-gray-200 italic">{{ props.option.frequency }}</div>
        </label>
      </div>
      <div class="cursor-pointer relative">
        <input :id="props.option.id" v-model="checked" type="checkbox" class="appearance-none w-14 h-14 bg-white border-[6px] border-gray-100 checked:bg-green checked:border-green" />
        <svg class="absolute left-2 top-3 stroke-[7px] pointer-events-none"
          :class="{
          'stroke-gray-500': checked,
          'stroke-gray-100': !checked,
        }"
        width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.75 20.9052L16.8448 29.75L35.9828 5" stroke-linecap="square"/>
        </svg>

      </div>
    </div>
</template>

<script setup>
  import { ref } from 'vue'
  const checked = ref(false)
  const props = defineProps(["option"]);
</script>