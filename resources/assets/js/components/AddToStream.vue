<template>
  <div class="message">
    <div class="message-header">
      Push to the Stream...
    </div>
    <div class="message-body">
      <form @submit.prevent="onSubmit">
        <p class="control">
          <textarea class="textarea"></textarea>
        </p>
        <p class="control">
          <button class="button is-primary">Submit</button>
        </p>
      </form>
    </div>
  </div>
</template>

<script>
  export default {
    methods: {
      onSubmit() {
        
      }
    }
  }
</script>
