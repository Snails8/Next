<template>
    <div>
        <v-sheet height="500">
            <v-calendar
              ref="calendar"
              locale="ja"
              :type="type"
              :now="today"
              :value="today"
              :events="events"
              color="primary">
            </v-calendar>
        </v-sheet>
    </div>
</template>

<script>
export default {
  date: () => ({
      today: '2020-11-20',
      type: 'month',
      datas:[],
      events: [
          {
              name: 'タスクある',
              start: '2020-11-19',
              end: '2020-11-01',
          },
          {
              name: 'Meeting',
              start: '2020-11-1 09:00',
              end: '2020-05-1 10:00',
          },
      ],
  }),
  computed:{

  },
  mounted () {

  },
  methods:{

  },
}
</script>