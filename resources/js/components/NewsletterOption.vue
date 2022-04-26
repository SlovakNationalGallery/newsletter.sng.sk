<template>
    <div class="flex items-center mb-8">
      <div class="grow">
        <label for="{{ props.option.id }}">
          <div class="text-5xl text-gray-50">{{ props.option.title }}</div>
          <div class="text-3xl text-white">{{ props.option.description }}</div>
          <div class="text-2xl text-gray-200 italic">{{ props.option.frequency }}</div>
        </label>
      </div>
      <div class="">
        <input id="{{ props.option.id }}" type="checkbox" class="appearance-none w-14 h-14 bg-white border-8 border-gray-100 checked:bg-green checked:border-green" />
      </div>
    </div>
</template>

<script setup>
  const props = defineProps(["option"]);
</script>