<template>
  <nav class="sidebar">
    <div class="sidebar-container">
      <ul>
        <li>
          <div class="brand">
            <div class="logo">
              <img src="../../public/logo-theme-admin.png" alt="" width="10px" />
            </div>
            <div class="brand-title">
              <h1>Anna Team</h1>
            </div>
          </div>
        </li>
        <li v-for="el in data" class="group-sidebar">
          <div class="template-dashboard">
            <div class="title-dashboard">
              <p>{{ el.title }}</p>
            </div>
            <ul>
              <li v-for="(obj, idx) in el.group_dashboard" class="all-groups">
                <GroupDashboard
                  :info="obj"
                  :class="{ active: obj.showOptions }"
                  @click="test(obj)"
                />
                <ul class="all-options" v-show="obj.showOptions">
                  <li
                    v-if="obj.optionsOfTable.isOption"
                    v-for="(option, index) in obj.optionsOfTable.names"
                  >
                    <LinkSidebar
                      :key="option.id"
                      :index="option.id"
                      :info="option.name"
                    />
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
import LinkSidebar from "./link_sidebar.vue";
import GroupDashboard from "./group_dashboard.vue";
import { ref } from "vue";
export default {
  data() {
    return {
      idIncrease: ref(-1),
      idIncreaseNames: ref(-1),
      data: [
        {
          title: "Main",
          group_dashboard: [
            {
              icon_name: "dashboard",
              name: "Dashboard",
              title_name: "Main",
              arrow_right: false,
              showOptions: false,
              optionsOfTable: {
                isOption: false,
                class: {
                  active: true,
                },
              },
            },
          ],
        },
        {
          title: "Entity",
          group_dashboard: [
            {
              icon_name: "movie",
              name: "Movies",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Movies",
                  },
                  {
                    name: "Creating Movie",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
            {
              icon_name: "merge_type",
              name: "Kind Of Movie",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Types",
                  },
                  {
                    name: "Creating Type",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
            {
              icon_name: "recent_actors",
              name: "Actors",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Actors",
                  },
                  {
                    name: "Creating Actor",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
            {
              icon_name: "location_on",
              name: "Nations",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Nations",
                  },
                  {
                    name: "Creating Nation",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
            {
              icon_name: "box",
              name: "Packages",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Packages",
                  },
                  {
                    name: "Creating Package",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
            {
              icon_name: "directions_railway_2",
              name: "Directors",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Directors",
                  },
                  {
                    name: "Creating Director",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
            {
              icon_name: "summarize",
              name: "Episodes Movie",
              title_name: "Entity",
              arrow_right: true,
              showOptions: false,
              optionsOfTable: {
                isOption: true,
                names: [
                  {
                    name: "All Episodes Movie",
                  },
                  {
                    name: "Creating Eposide Movie",
                  },
                ],
                class: {
                  active: false,
                },
              },
            },
          ],
        },
        {
          title: "Admin",
          group_dashboard: [
            {
              icon_name: "shield_person",
              name: "Anna Nguyen",
              title_name: "Admin",
              arrow_right: false,
              showOptions: false,
              optionsOfTable: {
                isOption: false,
                class: {
                  active: true,
                },
              },
            },
          ],
        },
        {
          title: "Settings",
          group_dashboard: [
            {
              icon_name: "logout",
              name: "Logout",
              title_name: "Settings",
              arrow_right: false,
              showOptions: false,
              optionsOfTable: {
                isOption: false,
                class: {
                  active: true,
                },
              },
            },
          ],
        },
      ],
    };
  },
  components: {
    LinkSidebar,
    GroupDashboard,
  },
  methods: {
    test: function (groupDashboard) {
      let allGroupSidebar = this.$data.data;
      allGroupSidebar.forEach((templateDashboard) => {
        if (templateDashboard.title === groupDashboard.title_name) {
          if (groupDashboard.showOptions) {
            groupDashboard.showOptions = false;
          } else {
            groupDashboard.showOptions = true;
          }
        }
      });
    },
  },
  created() {
    // browse all item in data object
    this.data.forEach((item) => {
      item.group_dashboard.forEach((dashboardItem) => {
        if (!dashboardItem.id) {
          dashboardItem.id = ++this.idIncrease;
        }
        if (dashboardItem.optionsOfTable.names) {
          dashboardItem.optionsOfTable.names.forEach((name) => {
            if (!name.id) {
              name.id = ++this.idIncreaseNames;
            }
          });
        }
      });
    });
  },
  // mounted: function () {
  //   console.log(this.$data);
  // },
};
</script>
<style scoped>
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 258px;
  height: 100vh;
  background: #181824;
  padding: 0px 20px;
  overflow-y: scroll;
}
.sidebar::-webkit-scrollbar-thumb {
  background: #0b4a08; /* Màu nền của phần kéo */
  border-radius: 10px; /* Làm tròn góc */
}
.sidebar::-webkit-scrollbar {
  width: 5px; /* Độ rộng của thanh cuộn */
}
.sidebar::-webkit-scrollbar-track {
  background: #181824; /* Màu nền của phần track */
}
.sidebar-container {
  width: 100%;
}
.sidebar-container ul {
  width: 100%;
}
.sidebar-container ul li {
  width: 100%;
}
.brand {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px 0px;
}
.logo {
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 7px;
}
.brand-title {
  color: #fff;
}
.brand-title h1 {
  font-size: 20px;
  font-style: oblique;
}
.template-dashboard {
  width: 100%;
}
.title-dashboard p {
  color: #8e94a9;
  font-size: 13px;
}
.options-animation-show {
  border: 1px solid red;
}
.active-color {
  color: #33c92d;
}
.group-sidebar {
  margin-top: 30px;
}
.all-options {
  position: relative;
  animation: show 0.5s linear;
}
@keyframes show {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
