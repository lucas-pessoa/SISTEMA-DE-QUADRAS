jQuery("#simulation")
  .on("click", ".s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a .click", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Label_5")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/56bfc118-be4e-4d0c-b642-4b5b4eb71784"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_7")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/a26a10d1-8e58-4695-9080-cf8cf35e3849"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_6")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/a26a10d1-8e58-4695-9080-cf8cf35e3849"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Button_1")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/2d361443-e8fc-4ad1-9f72-215f6bdc3378"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Button_2")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/2d361443-e8fc-4ad1-9f72-215f6bdc3378"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("mouseenter dragenter", ".s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a .mouseenter", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Label_5") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5": {
                      "attributes": {
                        "width": "jimEvent.fn.getCurrentStyle('width', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-left', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-right', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5') - 14 - 0",
                        "height": "jimEvent.fn.getCurrentStyle('height', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-top', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-bottom', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5') - 0 - 0",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "background-color": "#EEEEEE",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px"
                      },
                      "expressions": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_5": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "-pie-background": "#EEEEEE",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_7") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7": {
                      "attributes": {
                        "width": "jimEvent.fn.getCurrentStyle('width', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-left', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-right', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7') - 14 - 0",
                        "height": "jimEvent.fn.getCurrentStyle('height', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-top', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-bottom', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7') - 0 - 0",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "background-color": "#EEEEEE",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px"
                      },
                      "expressions": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_7": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "-pie-background": "#EEEEEE",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_6") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6": {
                      "attributes": {
                        "width": "jimEvent.fn.getCurrentStyle('width', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-left', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-right', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6') - 14 - 0",
                        "height": "jimEvent.fn.getCurrentStyle('height', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-top', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-bottom', '#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6') - 0 - 0",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "background-color": "#EEEEEE",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px"
                      },
                      "expressions": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a #s-Label_6": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "-pie-background": "#EEEEEE",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    }
  })
  .on("mouseleave dragleave", ".s-442a8fed-f9d3-446f-91a5-4cedb8b26f7a .mouseleave", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Label_5")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Label_7")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Label_6")) {
      jEvent.undoCases(jFirer);
    }
  });