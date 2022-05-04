<template>
    <div class="flex items-center">
      <div class="grow">
        <label :for="props.option.id" class="cursor-pointer">
          <div class="text-4xl text-gray-50">{{ props.option.title }}</div>
          <div class="text-2xl text-white">{{ props.option.description }}</div>
          <div class="text-xl text-gray-200 italic">{{ props.option.frequency }}</div>
        </label>
      </div>
      <div class="cursor-pointer relative">
        <input :id="props.option.id" :checked="props.checked" @input="emit('checked', props.option.id)" :value="props.option.id" type="checkbox" class="appearance-none rounded-none w-14 h-14 bg-white border-[6px] border-gray-100 checked:bg-green checked:border-green" />
        <svg class="absolute left-2 top-3 stroke-[7px] pointer-events-none"
          :class="{
          'stroke-gray-500': props.checked,
          'stroke-gray-100': !props.checked,
        }"
        width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.75 20.9052L16.8448 29.75L35.9828 5" stroke-linecap="square"/>
        </svg>

      </div>
    </div>
</template>

<script setup>
  import { ref } from 'vue'

  const props = defineProps({
    'option': Object,
    'checked': Boolean
  })

  const emit = defineEmits(['checked'])
</script>