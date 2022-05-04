<template>
    <div class="flex items-center mr-9">
      <div class="cursor-pointer relative w-8 h-8 mr-2.5">
        <input :id="props.option.id" :checked="props.checked" @input="emit('checked', props.option.id)" :value="props.option.id" type="checkbox" class="appearance-none rounded-none w-8 h-8 bg-white border-[3px] border-gray-100 checked:bg-green checked:border-green" />
        <svg class="absolute left-1 top-1 stroke-[4px] pointer-events-none w-6 h-6"
          :class="{
          'stroke-gray-500': props.checked,
          'stroke-gray-100': !props.checked,
        }"
        viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.75 20.9052L16.8448 29.75L35.9828 5" stroke-linecap="square"/>
        </svg>
      </div>
      <div class="grow">
        <label :for="props.option.id" class="cursor-pointer">
          {{ props.option.title }}
        </label>
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