/* 
 
 special char '&' is not allowed in code, must replace by '-'. For example I&R should be I-R here, however in database, it could have I&R.
 Other similar case do the same process.
 
 
 */

_code_column_name ='ZONE_CODE';


_designation['city_zoning']=[
    
    {'code':'R1','description':"Single Family Residential", 'color':"Yellow"}, 
    {'code':'R2-MD','description':"Multiple Family Residential (Medium Density)", 'color':"Coral"},
    {'code':'R2-HD','description':"Multiple Family Residential (High Density)", 'color':"Chocolate"},
    {'code':'R3','description':'Multiple Family Residential', 'color':"Brown"},
    
    {'code':'AP','description':'Administrative and Professional', 'color':"Cornsilk"},
    {'code':'CL','description':'Commercial Limited', 'color':"Purple"},
    {'code':'C1-S','description':'Shopping Cener', 'color':"Plum"},
    {'code':'C1','description':'Local Business', 'color':"Red"},
    
    {'code':'C2','description':'General Business', 'color':"Tomato"},
    {'code':'TC','description':'Town Center', 'color':"Violet"},
    {'code':'PDR-LD','description':'Planned Development Residential-Low_Density', 'color':"PapayaWhip"},
    {'code':'PDR-MD','description':'Planned Development Residential-Medium_Density', 'color':"PeachPuff"},
    {'code':'PDR-HD','description':'Planned Development Residential-High Density', 'color':"SaddleBrown"},
    {'code':'PDC','description':'Planned Development Commercial', 'color':"Orange"},
    {'code':'PDI','description':'Planned Development Industrial', 'color':"SkyBlue"},
    {'code':'I&R','description':'I&R-Institutional and Recreationalshp', 'color':"Green"},
    {'code':'MG','description':'General Industrial', 'color':"Blue"},
    {'code':'MP','description':'Industrial Park', 'color':"BlueViolet"}
    
    
];