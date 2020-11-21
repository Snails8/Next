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