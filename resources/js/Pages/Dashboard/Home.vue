
<template>
<v-app data-app>
  <v-main>
        <div class="content-wrapper">
            <div class="content">
            
                <v-expansion-panels
                   v-for="project in projects" :key="project.title">
                >
                    <v-expansion-panel>
                        <v-expansion-panel-header>
                            {{project.title}}
                        </v-expansion-panel-header>
                        <v-expansion-panel-content>
                            {{project.content}}
                         </v-expansion-panel-content>
                    </v-expansion-panel>
                </v-expansion-panels>
            </div>
        </div>
    </v-main>
</v-app>

</template>

<script>
import Layout from '@/Pages/Layout/Layout'

export default {
    layout: Layout,
    data(){
     return{
        projects: [
            { title: "WeCare - St. John's Home For Elderly Persons",
                content: "stuff"
            },
            { title: 'SmartFactory - BoingTech',
                content: "moar stuf"
            }
        ]
     }
    }
}
</script>