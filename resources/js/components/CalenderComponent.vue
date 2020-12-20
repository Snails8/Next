<template>
    <div>
        <v-memu bottom right>
            <template v-slot:activator="{ on }">
                <v-btn
                  outlined
                  coler="grey darken-2"
                  v-on="on"
                >
                  <span>{{type}}</span>
                </v-btn>
            </template>

            <v-list>
                <v-list-item @click="type = 'day'">
                  <v-list-item-title>Day</v-list-item-title>
                </v-list-item>
                <v-list-item @click="type = 'week'">
                  <v-list-item-title>Week</v-list-item-title>
                </v-list-item>
                <v-list-item @click="type = 'month'">
                  <v-list-item-title>Month</v-list-item-title>
                </v-list-item>
            </v-list>

        <v-sheet height="500">
            <v-calendar
              ref="calendar"
              locale="ja-jp"
              :type="type"
              :now="today"
              :value="today"
              :events="events"
              color="primary"
            ></v-calendar>
        </v-sheet>
    </div>
</template>

<script>
export default {
  date: () => ({
      today: `2020-12-20`,
      type: 'month',
      datas:[],
      events: [
          {
              name: 'タスクある',
              start: '2020-12-19',
              end: '2020-12-01',
          },
          {
              name: 'Meeting',
              start: '2020-12-1 09:00',
              end: '2020-12-1 10:00',
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