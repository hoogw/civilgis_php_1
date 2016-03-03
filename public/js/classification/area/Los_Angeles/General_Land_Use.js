/* 
 
 special char '&' is not allowed in code, must replace by '-'. For example I&R should be I-R here, however in database, it could have I&R.
 Other similar case do the same process.
 
 '&' fail the button and all button after. so in database, should not use '&', instead use '-' replace it. 
 */

_code_column_name = 'GPLU_CODE';


_designation['Los_Angeles_General_Land_Use'] = [





    { 'code': 'HIC', 'description': 'Hazard Industrial and Commercial', 'color': "aqua" },
   { 'code': 'NHIC', 'description': 'Non-Hazard Industrial and Commercial', 'color': "aquamarine" },
 
 
     { 'code': 'LM', 'description': 'Limited Manufacturing', 'color': "blue" },
    { 'code': 'HI', 'description': 'Hybrid Industrial', 'color': "blueviolet" },
     { 'code': 'MR', 'description': "Medium Residential", 'color': "brown" },
    
    
    { 'code': 'LMR', 'description': "Low Medium Residential", 'color': "chocolate" },
    { 'code': 'MNMR', 'description': 'Minimum Residential', 'color': "coral" },
    
    
    { 'code': 'NOC', 'description': 'Neighborhood Office Commercial', 'color': "firebrick" },
    { 'code': 'HMR', 'description': 'High Medium Residential', 'color': "fuchsia" },
    
    
    
    { 'code': 'AL', 'description': 'Airport Landside', 'color': "green" },
    
    
    
    { 'code': 'CC', 'description': 'Community Commercial', 'color': "hotpink" },
    
    
    
    { 'code': 'LI', 'description': 'Light Industrial', 'color': "indigo" },      
   
   
     { 'code': 'AN', 'description': 'Airport Northside', 'color': "lime" },
     { 'code': 'AA', 'description': 'Airport Airside', 'color': "lime" },
     { 'code': 'PF', 'description': 'Public Facilities', 'color': "lightblue" },
     
     
     { 'code': 'OS', 'description': 'Open Space', 'color': "olive" },
     { 'code': 'GC', 'description': 'General Commercial', 'color': "orange" },
     
     
     
     { 'code': 'RCC', 'description': 'Regional Center Commercial', 'color': "purple" },   
     { 'code': 'VHR', 'description': 'Very High Residential', 'color': "papayawhip" },
     { 'code': 'VLR', 'description': "Very Low Residential", 'color': "peachpuff" },    
     { 'code': 'HOLC', 'description': 'Highway Oriented and Limited Commercial', 'color': "plum" },

    
    { 'code': 'LC', 'description': 'Limited Commercial', 'color': "red" },
    
    
    
    
     { 'code': 'HM', 'description': 'Heavy Manufacturing', 'color': "silver" },
     { 'code': 'HI', 'description': 'Heavy Industrial', 'color': "silver" },
    { 'code': 'LM', 'description': 'Light Manufacturing', 'color': "skyblue" },
    { 'code': 'HR', 'description': 'High Residential', 'color': "saddlebrown" },
    
    
    
    { 'code': 'RC', 'description': 'Regional Commercial', 'color': "tomato" },
    { 'code': 'HOC', 'description': 'Highway Oriented Commercial', 'color': "tan" },
    
    
    { 'code': 'NC', 'description': 'Neighborhood Commercial', 'color': "violet" },
    
    
    { 'code': 'CM', 'description': 'Commercial Manufacturing', 'color': "wheat" },
    { 'code': 'CF', 'description': 'Commercial Fishing', 'color': "wheat" },

    

   { 'code': 'LR', 'description': "Low Residential", 'color': "yellow" }
   
];

