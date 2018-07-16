<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                      <p>
                        {{ status.user.name }} said...
                      </p>
                      <p>
                        {{ status.created_at | ago }}
                      </p>
                    </div>

                    <div class="message-body">
                        <p>
                          {{ status.body }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <add-to-stream></add-to-stream>
    </div>

</template>

<script>
  import moment from 'moment';
  import AddToStream from '../components/AddToStream.vue';

    export default {
      components: {
        AddToStream
      },
      data() {
        return {
          statuses: []
        }
      },
      filters: {
        ago(date) {
          return moment(date).toNow();
        }
      },
      created() {
        axios.get('/statuses')
          .then(response => this.statuses = response.data);
      }
    }
</script>
